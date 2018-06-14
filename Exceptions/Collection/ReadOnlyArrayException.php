<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection that is locked/read-only tries to modify the collection of
 * items.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ReadOnlyArrayException extends CollectionException
{
    const MESSAGE = 'Array/Collection is read-only, you cannot alter it';
    const CODE = 0;
}
