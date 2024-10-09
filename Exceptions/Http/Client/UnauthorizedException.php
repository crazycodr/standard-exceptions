<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\UnauthorizedTag;

/**
 * The request requires user authentication that was not provided along with the request. Although debatable: if a
 * user doesn't have permission to do something, you should be sending back a ForbiddenException instead of a
 * UnauthorizedException.
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
    public const HTTP_CODE = 401;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'Unauthorized: The request requires user authentication.';
}
