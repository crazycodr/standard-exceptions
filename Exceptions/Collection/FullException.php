<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection cannot be achieved because the collection has already reached
 * it's limit and cannot accept more data.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FullException extends CollectionException
{
    const MESSAGE = 'Cannot add items to array/collection, it is already full';
    const CODE = 0;
}
