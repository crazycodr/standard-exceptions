<?php

namespace Exceptions\Http\Client;

/**
 * The server is refusing to process a request because the request entity is larger than the server is willing or able to process.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestEntityTooLargeException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 413;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Request Entity Too Large: The server is refusing to process a request because the request entity is larger than the server is willing or able to process.';
}
