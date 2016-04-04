<?php

namespace Exceptions\IO;

/**
 * This is a tag like class that is used to regroup all IO exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class IOException extends \RuntimeException implements IOExceptionInterface
{
}
