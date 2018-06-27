<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\UnauthorizedTag;

/**
 * The resource cannot be reached because of proxy authentication failures.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ProxyAuthorizationRequiredException extends ClientErrorException implements UnauthorizedTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 407;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Proxy Authorization Required: The request you made tried to pass through a proxy that is refusing your credentials or refusing your anonymity. Please re-issue the request with proper credentials.';
}
