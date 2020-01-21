<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\AbortedTag;

/**
 * The server encountered an unrecoverable error with an internal provider while processing the request
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnrecoverableErrorException extends ClientErrorException implements AbortedTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 456;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'The request cannot be fulfilled due to an unrecoverable error with an internal provider';
}
