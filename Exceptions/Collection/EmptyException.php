<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection cannot be completed because the collection is empty.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class EmptyException extends CollectionException
{
    public const MESSAGE = 'Array/collection is currently empty';
    public const CODE = 0;
}
