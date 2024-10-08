<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection cannot be achieved because the collection has already reached
 * its limit and cannot accept more data.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FullException extends CollectionException
{
    public const MESSAGE = 'Cannot add items to array/collection, it is already full';
    public const CODE = 0;
}
