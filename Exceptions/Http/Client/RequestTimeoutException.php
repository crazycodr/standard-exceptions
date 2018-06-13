<?php

namespace Exceptions\Http\Client;

/**
 * The server tried to work the request out but something timed out along the way.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestTimeoutException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 408;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Request Timeout: A process further down the request chain failed to respond in time. You can try again but you might get the same response if the server load or the problem persists downstream.';
}
