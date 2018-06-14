<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection item that is locked/read-only tries to modify the item in
 * question.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ReadOnlyArrayItemException extends CollectionException
{
    const MESSAGE = 'Array/Collection item is read-only, you cannot modify it';
    const CODE = 0;
}
