<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\InvalidDataTag;

/**
 * The request could not be completed because the preconditions specified by the requester cannot be met by the server.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class PreConditionFailedException extends ClientErrorException implements InvalidDataTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 412;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Pre-condition Failed: The request cannot be completed because the server cannot provide content based on the pre-conditions you set.';
}
