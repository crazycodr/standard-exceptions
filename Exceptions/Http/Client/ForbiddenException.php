<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\ForbiddenTag;

/**
 * The server understood the request, but is refusing to fulfill it. Authorization will not help and the request
 * should not be repeated.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ForbiddenException extends ClientErrorException implements ForbiddenTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    public const HTTP_CODE = 403;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'Forbidden: The server understood the request, but is refusing to fulfill it. Authorization will not help and the request should not be repeated.';
}
