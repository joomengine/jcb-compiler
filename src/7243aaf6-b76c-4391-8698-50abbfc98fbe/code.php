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

namespace VDM\Joomla\Componentbuilder\Power\Service;


use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use VDM\Joomla\Model\Load as ModelLoad;
use VDM\Joomla\Model\Upsert as ModelUpsert;
use VDM\Joomla\Componentbuilder\Power\Data\Load as LoadData;
use VDM\Joomla\Componentbuilder\Power\Data\Insert as InsertData;
use VDM\Joomla\Componentbuilder\Power\Data\Update as UpdateData;
use VDM\Joomla\Componentbuilder\Power\Data\Delete as DeleteData;
use VDM\Joomla\Data\Item;


/**
 * Data Service Provider
 * 
 * @since 3.2.0
 */
class Data implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 * @since 3.2.0
	 */
	public function register(Container $container)
	{
		$container->alias(ModelLoad::class, 'Power.Model.Load')
			->share('Power.Model.Load', [$this, 'getModelLoad'], true);

		$container->alias(ModelUpsert::class, 'Power.Model.Upsert')
			->share('Power.Model.Upsert', [$this, 'getModelUpsert'], true);

		$container->alias(LoadData::class, 'Power.Load')
			->share('Power.Load', [$this, 'getLoadData'], true);

		$container->alias(InsertData::class, 'Power.Insert')
			->share('Power.Insert', [$this, 'getInsertData'], true);

		$container->alias(UpdateData::class, 'Power.Update')
			->share('Power.Update', [$this, 'getUpdateData'], true);

		$container->alias(DeleteData::class, 'Power.Delete')
			->share('Power.Delete', [$this, 'getDeleteData'], true);

		$container->alias(Item::class, 'Power.Item')
			->share('Power.Item', [$this, 'getItem'], true);
	}

	/**
	 * Get The Load Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  ModelLoad
	 * @since 3.2.0
	 */
	public function getModelLoad(Container $container): ModelLoad
	{
		return new ModelLoad(
			$container->get('Table'), 'power', false
		);
	}

	/**
	 * Get The Upsert Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  ModelUpsert
	 * @since 3.2.0
	 */
	public function getModelUpsert(Container $container): ModelUpsert
	{
		return new ModelUpsert(
			$container->get('Table'), 'power', false
		);
	}

	/**
	 * Get The Load Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  LoadData
	 * @since 3.2.0
	 */
	public function getLoadData(Container $container): LoadData
	{
		return new LoadData(
			$container->get('Power.Model.Load'),
			$container->get('Load')
		);
	}

	/**
	 * Get The Insert Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  InsertData
	 * @since 3.2.0
	 */
	public function getInsertData(Container $container): InsertData
	{
		return new InsertData(
			$container->get('Power.Model.Upsert'),
			$container->get('Insert')
		);
	}

	/**
	 * Get The Update Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  UpdateData
	 * @since 3.2.0
	 */
	public function getUpdateData(Container $container): UpdateData
	{
		return new UpdateData(
			$container->get('Power.Model.Upsert'),
			$container->get('Update')
		);
	}

	/**
	 * Get The Delete Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  DeleteData
	 * @since 3.2.2
	 */
	public function getDeleteData(Container $container): DeleteData
	{
		return new DeleteData(
			$container->get('Delete')
		);
	}

	/**
	 * Get The Item Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Item
	 * @since 3.2.2
	 */
	public function getItem(Container $container): Item
	{
		return new Item(
			$container->get('Power.Load'),
			$container->get('Power.Insert'),
			$container->get('Power.Update'),
			$container->get('Power.Delete')
		);
	}
}

