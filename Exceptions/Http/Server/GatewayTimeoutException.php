<?php

namespace Exceptions\Http\Server;

/**
 * This server is acting as a gateway or proxy to another server but the underlying server or process failed to
 * respond in time.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class GatewayTimeoutException extends ServerErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 504;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Gateway Timeout: This server is acting as a gateway or proxy to another server but the underlying server or process failed to respond in time.';
}
