<?php

namespace Exceptions\Http\Server;

/**
 * The server is currently unable to handle the request due to a temporary overloading or maintenance of the server.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ServiceUnavailableException extends ServerErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    public const HTTP_CODE = 503;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'Service Unavailable: The server is currently unable to handle the request due to a temporary overloading or maintenance of the server.';
}
