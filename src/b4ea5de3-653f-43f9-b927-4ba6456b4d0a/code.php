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

namespace VDM\Joomla\Componentbuilder\JoomlaPower\Data;


use VDM\Joomla\Interfaces\Data\LoadInterface;
use VDM\Joomla\Abstraction\Data\Load as ExtendingLoad;


/**
 * Joomla Power Data Load
 * 
 * @since 3.2.2
 */
final class Load extends ExtendingLoad implements LoadInterface
{
	/**
	 * Table Name
	 *
	 * @var    string
	 * @since 3.2.1
	 */
	protected string $table = 'joomla_power';
}

