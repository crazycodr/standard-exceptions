<?php

namespace Exceptions\Http\Client;

/**
 * The server encountered an unrecoverable error with an internal provider while processing the request
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Jean-Christophe Binet <me@jeanchristophebinet.com>
 * @license  MIT
 */
class UnrecoverableErrorException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    public const HTTP_CODE = 456;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'The request cannot be fulfilled due to an unrecoverable error with an internal provider';
}
