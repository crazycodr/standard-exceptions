<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\ForbiddenTag;

/**
 * The request could not be completed because the requester is making too many requests at the server. Use this
 * exception if you are throttling users based on some value such as a leaky bucket algorithm.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class TooManyRequestsTag extends ClientErrorException implements ForbiddenTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 429;
    
    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Too Many Requests: The request you are making cannot be completed because you are making too many requests to this system. Please try again later.';
}
