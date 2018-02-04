<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * The cache item pool class.
 *
 * @since 1.0.0
 */
class CacheItemPool implements CacheItemPoolInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getItem($key)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function getItems(array $keys = array())
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function hasItem($key)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function clear()
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function deleteItem($key)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function deleteItems(array $keys)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function save(CacheItemInterface $item)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function saveDeferred(CacheItemInterface $item)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function commit()
	{
		// TODO
	}
}
