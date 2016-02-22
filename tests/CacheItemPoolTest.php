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
 * The cache item pool test class.
 *
 * @since 1.0.0
 */
class CacheItemPoolTest extends \PHPUnit_Framework_TestCase
{
	/** @var CacheItem The cache item pool. */
	private $cacheItemPool;

	public function setUp()
	{
		$this->cacheItemPool = new CacheItemPool();
	}

	public function testGetItem()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->getItem(''));
	}

	public function testGetItems()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->getItems([]));
	}

	public function testHasItem()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->hasItem(''));
	}

	public function testClear()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->clear());
	}

	public function testDeleteItem()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->deleteItem(''));
	}

	public function testDeleteItems()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->deleteItems([]));
	}

	public function testSave()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->save(new CacheItem));
	}

	public function testSaveDeferred()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->saveDeferred(new CacheItem));
	}

	public function testCommit()
	{
		// TODO
		$this->assertNull($this->cacheItemPool->commit());
	}
}
