<?php

namespace Exceptions\Collection;

use Exceptions\Tag\NotFoundException;

/**
 * Use this exception when an operation on a collection tries to retrieve an element using a key that does not exist in
 * the collection of items.
 *
 * Be careful not to throw this exception when data from a data source cannot be found unless that data source is
 * specifically a collection/array like structure that lives in memory. When querying a filesystem, use the
 * filesystem exceptions, when querying a data source use the data exceptions, etc.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class KeyNotFoundException extends CollectionException implements NotFoundException
{
    const MESSAGE = 'Key not found in array/collection';
    const CODE = 0;
}
