<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\UnauthorizedTag;

/**
 * The request requires user authentication.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnauthorizedException extends ClientErrorException implements UnauthorizedTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 401;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Unauthorized: The request requires user authentication.';
}
