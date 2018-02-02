# CacheItemPool

The cache item pool class.

## Example(s)

```php
<?php

use miBadger\Cache\CacheItemPool;

/**
 * Returns a Cache Item representing the specified key.
 */
$cacheItemPool->getItem($key);

/**
 * Returns a traversable set of cache items.
 */
$cacheItemPool->getItems(array $keys = array());

/**
 * Confirms if the cache contains specified cache item.
 */
$cacheItemPool->hasItem($key);

/**
 * Deletes all items in the pool.
 */
$cacheItemPool->clear();

/**
 * Removes the item from the pool.
 */
$cacheItemPool->deleteItem($key);

/**
 * Removes multiple items from the pool.
 */
$cacheItemPool->deleteItems(array $keys);

/**
 * Persists a cache item immediately.
 */
$cacheItemPool->save(CacheItemInterface $item);

/**
 * Sets a cache item to be persisted later.
 */
$cacheItemPool->saveDeferred(CacheItemInterface $item);

/**
 * Persists any deferred cache items.
 */
$cacheItemPool->commit();
```
