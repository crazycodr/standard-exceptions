<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO network request fails to respond in time. This exception is slightly different
 * from the ConnectionTimeoutException where it is the connection to the host that failed.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestTimeoutException extends NetworkException
{
    public const MESSAGE = 'Request timed out while waiting for remote party to return response';
    public const CODE = 0;
}
