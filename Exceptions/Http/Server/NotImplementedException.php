<?php

namespace Exceptions\Http\Server;

/**
 * The server does not support the functionality required to fulfill the request.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotImplementedException extends ServerErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    public const HTTP_CODE = 501;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'Not Implemented: The server does not support the functionality required to fulfill the request.';
}
