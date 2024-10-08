<?php

namespace Exceptions\Collection;

use Exceptions\Tag\ExistsTag;

/**
 * Use this exception when an operation on a collection tries to add an element using a key that already exists in the
 * collection of items.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class KeyAlreadyExistsException extends CollectionException implements ExistsTag
{
    public const MESSAGE = 'Key already exists in array/collection';
    public const CODE = 0;
}
