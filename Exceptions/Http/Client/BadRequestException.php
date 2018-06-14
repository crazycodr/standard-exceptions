<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\InvalidDataTag;

/**
 * The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request
 * without modifications.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class BadRequestException extends ClientErrorException implements InvalidDataTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 400;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Bad Request: The request could not be understood by the server due to malformed syntax. The client should not repeat the request without modifications.';
}
