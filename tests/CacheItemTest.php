<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Cache;

/**
 * The cache item test class.
 *
 * @since 1.0.0
 */
class CacheItemTest extends \PHPUnit_Framework_TestCase
{
	/** @var CacheItem The cache item. */
	private $cacheItem;

	public function setUp()
	{
		$this->cacheItem = new CacheItem();
	}

	public function testGetKey()
	{
		// TODO
		$this->assertNull($this->cacheItem->getKey());
	}

	public function testGet()
	{
		// TODO
		$this->assertNull($this->cacheItem->get());
	}

	public function testIsHit()
	{
		// TODO
		$this->assertNull($this->cacheItem->isHit());
	}

	public function testSet()
	{
		// TODO
		$this->assertNull($this->cacheItem->set(''));
	}

	public function testExpiresAt()
	{
		// TODO
		$this->assertNull($this->cacheItem->expiresAt(''));
	}

	public function testExpiresAfter()
	{
		// TODO
		$this->assertNull($this->cacheItem->expiresAfter(''));
	}
}
