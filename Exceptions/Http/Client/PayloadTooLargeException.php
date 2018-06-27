<?php

namespace Exceptions\Http\Client;

/**
 * The server is refusing to process a request because the payload is larger than the server is willing or able to
 * process.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class PayloadTooLargeException extends RequestEntityTooLargeException
{
    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Payload Too Large: The server is refusing to process a request because the payload is larger than the server is willing or able to process.';
}
