<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Cache;

use Psr\Cache\CacheItemInterface;

/**
 * The cache item class.
 *
 * @since 1.0.0
 */
class CacheItem implements CacheItemInterface
{
	/**
	 * Construct a cache item object.
	 */
	public function __construct()
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function getKey()
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function get()
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function isHit()
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function set($value)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function expiresAt($expiration)
	{
		// TODO
	}

	/**
	 * {@inheritdoc}
	 */
	public function expiresAfter($time)
	{
		// TODO
	}
}
