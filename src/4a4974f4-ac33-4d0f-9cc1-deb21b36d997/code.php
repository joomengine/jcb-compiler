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

namespace VDM\Joomla\Componentbuilder\Power\Data;


use VDM\Joomla\Interfaces\Data\DeleteInterface;
use VDM\Joomla\Abstraction\Data\Delete as ExtendingDelete;


/**
 * Power Data Delete
 * 
 * @since 3.2.2
 */
final class Delete extends ExtendingDelete implements DeleteInterface
{
	/**
	 * Table Name
	 *
	 * @var    string
	 * @since 3.2.2
	 */
	protected string $table = 'power';
}

