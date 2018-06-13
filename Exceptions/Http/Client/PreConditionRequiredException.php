<?php

namespace Exceptions\Http\Client;

/**
 * The request cannot be handled because you expected a pre-condition header field to be present and it was not.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class PreConditionRequiredException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 428;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Pre-condition Required: The request cannot be completed because the request was not made using an a pre-condition header that should have been included with it.';
}
