<?php

namespace Exceptions\Collection;

/**
 * This is a tag like class that is used to regroup all Collection exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class CollectionException extends \RuntimeException implements CollectionExceptionInterface
{
}
