<?php

namespace Exceptions\Data;

/**
 * This is a tag like class that is used to regroup all Data exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class DataException extends \RuntimeException implements DataExceptionInterface
{
}
