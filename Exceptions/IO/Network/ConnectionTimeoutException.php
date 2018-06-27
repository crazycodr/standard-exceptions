<?php

namespace Exceptions\IO\Network;

use Exceptions\Tag\AbortedTag;

/**
 * Use this exception when an IO network connection fails to connect in time. This exception is slightly different
 * from the RequestTimeoutException where it is the request that failed.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ConnectionTimeoutException extends NetworkException implements AbortedTag
{
    const MESSAGE = 'Connection timed out while connecting to the remote host';
    const CODE = 0;
}
