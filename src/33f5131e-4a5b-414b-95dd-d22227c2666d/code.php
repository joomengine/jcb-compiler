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


use VDM\Joomla\Abstraction\StorageRegistry\Traits\InArray;
use VDM\Joomla\Interfaces\Storageregistryinterface;
use VDM\Joomla\Abstraction\StorageRegistry;


/**
 * Site Field Data Builder Class
 * 
 * @since 3.2.0
 */
final class SiteFieldData extends StorageRegistry implements Storageregistryinterface
{
	/**
	 * In Array
	 *
	 * @since 3.2.0
	 */
	use InArray;
}

