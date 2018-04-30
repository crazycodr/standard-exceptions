<?php

namespace Exceptions\Http\Client;

/**
 * The server understood the request, but is refusing to fulfill it. Authorization will not help and the request
 * SHOULD NOT be repeated.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ForbiddenException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 403;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Forbidden: The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated.';
}
