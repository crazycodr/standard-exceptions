<?php

namespace Exceptions\IO\Network;

use Exceptions\Tag\AbortedTag;

/**
 * Use this exception when an IO network request fails to respond in time. This exception is slightly different
 * from the ConnectionTimeoutException where it is the connection to the host that failed.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestTimeoutException extends NetworkException implements AbortedTag
{
    const MESSAGE = 'Request timed out while waiting for remote party to return response';
    const CODE = 0;
}
