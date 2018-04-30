<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection tries to add an element using a key that already exists in the
 * collection of items.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class KeyAlreadyExistsException extends CollectionException
{
    const MESSAGE = 'Key already exists in array/collection';
    const CODE = 0;
}
