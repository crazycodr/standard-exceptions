<?php

namespace Exceptions\Collection;

use Exceptions\Tag\AbortedTag;

/**
 * Use this exception when an operation on a collection cannot be achieved because the array is empty.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class EmptyException extends CollectionException implements AbortedTag
{
    const MESSAGE = 'Array/collection is currently empty';
    const CODE = 0;
}
