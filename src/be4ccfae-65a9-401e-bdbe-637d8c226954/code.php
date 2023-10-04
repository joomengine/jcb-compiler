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


use Joomla\Registry\Registry as JoomlaRegistry;
use Joomla\CMS\Factory as JoomlaFactory;
use VDM\Joomla\Utilities\GetHelper;
use VDM\Joomla\Utilities\StringHelper;
use VDM\Joomla\Componentbuilder\Abstraction\BaseConfig;


/**
 * Compiler Configurations
 * 
 * 	All these functions are accessed via the direct name without the get:
 * 	example: $this->component_code_name calls: $this->getComponentcodename()
 * 
 * 	All values once called are cached, yet can be updated directly:
 * 	example: $this->component_code_name = 'new_code_name'; // be warned!
 * 
 * @since 3.2.0
 */
class Config extends BaseConfig
{
	/**
	 * The Global Joomla Configuration
	 *
	 * @var     JoomlaRegistry
	 * @since 3.2.0
	 */
	protected JoomlaRegistry $config;

	/**
	 * Constructor
	 *
	 * @param Input|null        $input      Input
	 * @param Registry|null     $params     The component parameters
	 * @param Registry|null     $config     The Joomla configuration
	 *
	 * @throws \Exception
	 * @since 3.2.0
	 */
	public function __construct(?Input $input = null, ?JoomlaRegistry $params = null, ?JoomlaRegistry $config = null)
	{
		parent::__construct($input, $params);

		$this->config = $config ?: JoomlaFactory::getConfig();
	}

	/**
	 * get Gitea Access Token
	 *
	 * @return  string  the access token
	 * @since 3.2.0
	 */
	protected function getGiteatoken(): ?string
	{
		return $this->custom_gitea_token ?? $this->params->get('gitea_token');
	}

	/**
	 * get Add Custom Gitea URL
	 *
	 * @return  int  the add switch
	 * @since 3.2.0
	 */
	protected function getAddcustomgiteaurl(): int
	{
		return $this->params->get('add_custom_gitea_url', 1);
	}

	/**
	 * get Custom Gitea URL
	 *
	 * @return  string  the custom gitea url
	 * @since 3.2.0
	 */
	protected function getCustomgiteaurl(): ?string
	{
		if ($this->add_custom_gitea_url == 2)
		{
			return $this->params->get('custom_gitea_url');
		}

		return null;
	}

	/**
	 * get Custom Gitea Access Token
	 *
	 * @return  string  the custom access token
	 * @since 3.2.0
	 */
	protected function getCustomgiteatoken(): ?string
	{
		if ($this->add_custom_gitea_url == 2)
		{
			return $this->params->get('custom_gitea_token');
		}

		return null;
	}

	/**
	 * get temporary path
	 *
	 * @return  string  The temporary path
	 * @since 3.2.0
	 */
	protected function getTmppath(): string
	{
		// get the temporary path
		return $this->config->get('tmp_path');
	}

	/**
	 * Get local super powers repository path
	 *
	 * @return  string The path to the local repository
	 * @since 3.2.0
	 */
	protected function getLocalpowersrepositorypath(): string
	{
		$default = $this->tmp_path . '/super_powers';

		if (!$this->add_super_powers)
		{
			return $default;
		}

		$global = $this->params->get('local_powers_repository_path', $default);

		if (!$this->show_advanced_options)
		{
			return $global;
		}

		$value = $this->input->post->get('powers_repository', 2, 'INT');

		return $value == 1
			? $this->input->post->get('local_powers_repository_path', $global, 'PATH')
			: $global;
	}

	/**
	 * Get super power approved paths
	 *
	 * @return  array The approved paths to the repositories on Gitea
	 * @since 3.2.0
	 */
	protected function getApprovedpaths(): array
	{
		$default = (object) ['owner' => 'joomla', 'repo' => 'super-powers', 'branch' => 'master'];

		if (!$this->add_own_powers)
		{
			return [$default];
		}

		$paths = $this->params->get('approved_paths');

		$approved = [];
		if (!empty($paths))
		{
			foreach ($paths as $path)
			{
				// we make sure to get only the objects
				$approved[] = $path;
			}
		}

		// finally we add the default
		$approved[] = $default;

		return $approved;
	}
}

