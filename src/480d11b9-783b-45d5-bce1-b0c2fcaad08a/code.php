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

namespace VDM\Joomla\Componentbuilder\Compiler\Builder;


use VDM\Joomla\Componentbuilder\Compiler\Utilities\Indent;
use VDM\Joomla\Componentbuilder\Interfaces\Mapperdoubleinterface;
use VDM\Joomla\Componentbuilder\Abstraction\MapperDouble;


/**
 * Permission Views Builder Class
 * 
 * @since 3.2.0
 */
final class PermissionViews extends MapperDouble implements Mapperdoubleinterface
{
	/**
	 * Get the build view content
	 *
	 * @return  string
	 * @since 3.2.0
	 */
	public function build(): string
	{
		if ($this->isActive())
		{
			$bucket = [];
			foreach ($this->active as $views_code_name => $actions)
			{
				$bucket[] = Indent::_(1) . '<section name="' . $views_code_name . '">';

				foreach ($actions as $action)
				{
					$bucket[] = Indent::_(2) . '<action name="'
						. $action['name'] . '" title="'
						. $action['title'] . '" description="'
						. $action['description'] . '" />';
				}

				$bucket[] = Indent::_(1) . "</section>";
			}

			// reset memory
			$this->active = [];

			return PHP_EOL . implode(PHP_EOL, $bucket);
		}

		return '';
	}

	/**
	 * Model the first key
	 *
	 * @param   string   $key  The first key to model
	 *
	 * @return  string
	 * @since 3.2.0
	 */
	protected function firstKey(string $key): string
	{
		return $key;
	}

	/**
	 * Model the second key
	 *
	 * @param   string   $key  The second key to model
	 *
	 * @return  string
	 * @since 3.2.0
	 */
	protected function secondKey(string $key): string
	{
		return $key;
	}
}

