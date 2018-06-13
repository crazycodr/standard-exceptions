<?php

namespace Exceptions\Http\Server;

/**
 * This server is acting as a gateway or proxy to another server but received an invalid response.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class BadGatewayException extends ServerErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 502;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Bad Gateway: The server cannot complete the request because a downstream process failed to respond properly.';
}
