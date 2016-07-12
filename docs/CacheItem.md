# CacheItem

The cache item class.

## Example(s)

```php
<?php

use miBadger\Cache\CacheItem;

/**
 * Returns the key for the current cache item.
 */
$cacheItem->getKey();

/**
 * Retrieves the value of the item from the cache associated with this object's key.
 */
$cacheItem->get();

/**
 * Confirms if the cache item lookup resulted in a cache hit.
 */
$cacheItem->isHit();

/**
 * Sets the value represented by this cache item.
 */
$cacheItem->set($value);

/**
 * Sets the expiration time for this cache item.
 */
$cacheItem->expiresAt($expiration);

/**
 * Sets the expiration time for this cache item.
 */
$cacheItem->expiresAfter($time);
```
