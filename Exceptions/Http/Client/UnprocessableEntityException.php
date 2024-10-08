<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\InvalidDataTag;

/**
 * The request was well-formed but was unable to be followed due to semantic errors, validation errors or domain constraints such as uniqueness of values.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnprocessableEntityException extends ClientErrorException implements InvalidDataTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    public const HTTP_CODE = 422;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'Unprocessable Entity: The request was well-formed but was unable to be followed due to semantic errors, validation errors or domain constraints such as uniqueness of values.';
}
