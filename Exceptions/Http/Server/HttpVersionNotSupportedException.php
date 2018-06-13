<?php

namespace Exceptions\Http\Server;

/**
 * This server cannot understand the request using the HTTP protocol version you are using.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class HttpVersionNotSupportedException extends ServerErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 505;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'HTTP Version Not Supported: This server cannot understand the request using the HTTP protocol version you are using.';
}
