<?php

namespace Exceptions\IO\Network;

use Exceptions\IO\IOException;

/**
 * This is a tag like class that is used to regroup all IO\Network exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class NetworkException extends IOException implements NetworkExceptionInterface
{
}
