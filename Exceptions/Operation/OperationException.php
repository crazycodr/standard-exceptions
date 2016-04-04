<?php

namespace Exceptions\Operation;

/**
 * This is a tag like class that is used to regroup all Operation exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class OperationException extends \RuntimeException implements OperationExceptionInterface
{
}
