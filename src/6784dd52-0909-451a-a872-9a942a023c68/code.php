<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Componentbuilder\Power;


use Joomla\CMS\Factory;
use Joomla\CMS\Filesystem\Folder;
use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Language\Text;
use VDM\Joomla\Gitea\Repository\Contents;
use VDM\Joomla\Utilities\FileHelper;
use VDM\Joomla\Utilities\JsonHelper;


/**
 * Power Grep
 *        The Grep feature will try to find your power in the repositories listed in the global
 *        Options of JCB in the super powers tab, and if it can't be found there will try the global core
 *        Super powers of JCB. All searches are performed according the the [algorithm:cascading]
 *        See documentation for more details: https://git.vdm.dev/joomla/super-powers/wiki
 * 
 * @since 3.2.0
 */
final class Grep
{
	/**
	 * The local path
	 *
	 * @var    array
	 * @since 3.2.0
	 **/
	public string $path;

	/**
	 * All approved paths
	 *
	 * @var    array
	 * @since 3.2.0
	 **/
	public ?array $paths;

	/**
	 * Gitea Repository Contents
	 *
	 * @var    Contents
	 * @since 3.2.0
	 **/
	protected Contents $contents;

	/**
	 * Joomla Application object
	 *
	 * @var    CMSApplication
	 * @since 3.2.0
	 **/
	protected CMSApplication $app;

	/**
	 * Constructor.
	 *
	 * @param string          $path      The the local path
	 * @param array           $paths     The the approved paths
	 * @param Contents        $contents  The Gitea Repository Contents object.
	 * @param CMSApplication|null     $app          The CMS Application object.
	 *
	 * @throws \Exception
	 * @since 3.2.0
	 */
	public function __construct(string $path, array $paths, Contents $contents, ?CMSApplication $app = null)
	{
		$this->path = $path;
		$this->paths = $paths;
		$this->contents = $contents;
		$this->app = $app ?: Factory::getApplication();

		$this->init();
	}

	/**
	 * Get a power
	 *
	 * @param string    $guid    The global unique id of the power
	 * @param array    $order    The search order
	 *
	 * @return object|null
	 * @since 3.2.0
	 */
	public function get(string $guid, $order = ['Local', 'Remote']): ?object
	{
		// we can only search if we have paths
		if (is_array($this->paths) && $this->paths !== [])
		{
			foreach ($order as $target)
			{
				if (($power = $this->{'search' . $target}($guid)) !== null)
				{
					return $power;
				}
			}
		}

		return null;
	}

	/**
	 * Search for a local power
	 *
	 * @param string    $guid    The global unique id of the power
	 *
	 * @return object|null
	 * @since 3.2.0
	 */
	private function searchLocal(string $guid): ?object
	{
		// we can only search if we have paths
		if ($this->path && $this->paths)
		{
			foreach ($this->paths as $path)
			{
				// get local index
				$this->localIndex($path);

				if (!empty($path->local) && isset($path->local->{$guid}))
				{
					return $this->getLocal($path, $guid);
				}
			}
		}

		return null;
	}

	/**
	 * Search for a remote power
	 *
	 * @param string    $guid    The global unique id of the power
	 *
	 * @return object|null
	 * @since 3.2.0
	 */
	private function searchRemote(string $guid): ?object
	{
		// we can only search if we have paths
		if ($this->path && $this->paths)
		{
			foreach ($this->paths as $path)
			{
				// get local index
				$this->remoteIndex($path);

				if (!empty($path->index) && isset($path->index->{$guid}))
				{
					return $this->getRemote($path, $guid);
				}
			}
		}

		return null;
	}

	/**
	 * Get a local power
	 *
	 * @param object    $path    The repository path details
	 * @param string    $guid    The global unique id of the power
	 *
	 * @return object|null
	 * @since 3.2.0
	 */
	private function getLocal(object $path, string $guid): ?object
	{
		if (empty($path->local->{$guid}->settings) || empty($path->local->{$guid}->code))
		{
			return null;
		}

		// get the settings
		if (($settings = FileHelper::getContent($this->full_path . '/' . $path->local->{$guid}->settings, null)) !== null &&
			JsonHelper::check($settings))
		{
			$power = json_decode($settings);

			// get the code
			if (($code = FileHelper::getContent($this->full_path . '/' . $path->local->{$guid}->code, null)) !== null)
			{
				$power->main_class_code = $this->getCode($code);
				$power->licensing_template = $this->getLicense($code);

				return $power;
			}
		}

		return null;
	}

	/**
	 * Get a remote power
	 *
	 * @param object    $path    The repository path details
	 * @param string    $guid    The global unique id of the power
	 *
	 * @return object|null
	 * @since 3.2.0
	 */
	private function getRemote(object $path, string $guid): ?object
	{
		if (empty($path->index->{$guid}->settings) || empty($path->index->{$guid}->code))
		{
			return null;
		}

		// get the settings
		if (($power = $this->loadRemoteFile($path->owner, $path->repo, $path->index->{$guid}->settings, $path->branch)) !== null &&
			isset($power->guid))
		{
			// get the code
			if (($code = $this->loadRemoteFile($path->owner, $path->repo, $path->index->{$guid}->code, $path->branch)) !== null)
			{
				$power->main_class_code = $this->getCode($code);
				$power->licensing_template = $this->getLicense($code);

				return $power;
			}
		}

		return null;
	}

	/**
	 * Set path details
	 *
	 * @return void
	 * @since 3.2.0
	 */
	private function init()
	{
		if (!Folder::exists($this->path))
		{
			$this->path = null;
		}

		if (is_array($this->paths) && $this->paths !== [])
		{
			foreach ($this->paths as $n => &$path)
			{
				if (isset($path->owner) && strlen($path->owner) > 1 &&
						isset($path->repo) && strlen($path->repo) > 1)
				{
					// build the path
					$path->path = trim($path->owner) . '/' . trim($path->repo);

					// update the branch
					if ($path->branch === 'default' || empty($path->branch))
					{
						$path->branch = null;
					}

					// set local path
					if ($this->path && Folder::exists($this->path . '/' . $path->path))
					{
						$this->full_path = $this->path . '/' . $path->path;
					}
				}
				else
				{
					unset($this->paths[$n]);
				}
			}

			// if we still have paths
			if ($this->paths !== [])
			{
				return;
			}
		}

		$this->paths = null;
	}

	/**
	 * Load the local repository index of powers
	 *
	 * @param object    $path    The repository path details
	 *
	 * @return void
	 * @since 3.2.0
	 */
	private function localIndex(object &$path)
	{
		if (isset($path->local) || !isset($this->full_path))
		{
			return;
		}

		if (($content = FileHelper::getContent($this->full_path . '/super-powers.json', null)) !== null &&
			JsonHelper::check($content))
		{
			$path->local = json_decode($content);

			return;
		}

		$path->local = null;
	}

	/**
	 * Load the remote repository index of powers
	 *
	 * @param object    $path    The repository path details
	 *
	 * @return void
	 * @since 3.2.0
	 */
	private function remoteIndex(object &$path)
	{
		if (isset($path->index))
		{
			return;
		}

		try
		{
			$path->index = $this->contents->get($path->owner, $path->repo, 'super-powers.json', $path->branch);
		}
		catch (\DomainException $e)
		{
			$this->app->enqueueMessage(
				Text::sprintf('COM_COMPONENTBUILDER_PSUPER_POWERB_REPOSITORY_AT_BGITVDMDEVSB_GAVE_THE_FOLLOWING_ERRORBR_SP', $path->path, $e->getMessage()),
				'Error'
			);

			$path->index = null;
		}
	}

	/**
	 * Load the remote file
	 *
	 * @param string         $owner    The repository owner
	 * @param string         $repo     The repository name
	 * @param string         $path     The repository path to file
	 * @param string|null    $branch   The repository branch name
	 *
	 * @return mixed
	 * @since 3.2.0
	 */
	private function loadRemoteFile(string $owner, string $repo, string $path, ?string $branch)
	{
		try
		{
			$data = $this->contents->get($owner, $repo, $path, $branch);
		}
		catch (\DomainException $e)
		{
			$this->app->enqueueMessage(
				Text::sprintf('COM_COMPONENTBUILDER_PFILE_AT_BGITEAREMOTESB_GAVE_THE_FOLLOWING_ERRORBR_SP', $path, $e->getMessage()),
				'Error'
			);

			return null;
		}

		return $data;
	}

	/**
	 * Get the class body
	 *
	 * @param string $code The class
	 *
	 * @return string|null The class body, or null if not found
	 **/
	private function getCode($code): ?string
	{
		// Match class, final class, abstract class, interface, and trait
		$pattern = '/(?:class|final class|abstract class|interface|trait)\s+[a-zA-Z0-9_]+\s*(?:extends\s+[a-zA-Z0-9_]+\s*)?(?:implements\s+[a-zA-Z0-9_]+(?:\s*,\s*[a-zA-Z0-9_]+)*)?\s*\{/s';

		// Split the input code based on the class declaration pattern
		$parts = preg_split($pattern, $code, 2, PREG_SPLIT_DELIM_CAPTURE);
		$body = $parts[1] ?? '';

		if ($body !== '')
		{
			// Remove leading and trailing white space
			$body = trim($body);

			// Remove the first opening curly brace if it exists
			if (mb_substr($body, 0, 1) === '{')
			{
				$body = mb_substr($body, 1);
			}

			// Remove the last closing curly brace if it exists
			if (mb_substr($body, -1) === '}')
			{
				$body = mb_substr($body, 0, -1);
			}

			return $body;
		}

		// No class body found, return null
		return null;
	}

	/**
	 * Get the class license
	 *
	 * @param string $code The class
	 *
	 * @return string|null The class license, or null if not found
	 **/
	private function getLicense($code): ?string
	{
		// Check if the file starts with '<?php'
		if (substr($code, 0, 5) !== '<?php')
		{
			return null;
		}

		// Trim the '<?php' part
		$code = ltrim(substr($code, 5));

		// Check if the next part starts with '/*'
		if (substr($code, 0, 2) !== '/*')
		{
			return null;
		}

		// Find the position of the closing comment '*/'
		$endCommentPos = strpos($code, '*/');

		// If the closing comment '*/' is found, extract and return the license
		if ($endCommentPos !== false)
		{
			$license = substr($code, 2, $endCommentPos - 2);
			return trim($license);
		}

		// No license found, return null
		return null;
	}

}

