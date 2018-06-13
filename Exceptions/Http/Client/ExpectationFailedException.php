<?php

namespace Exceptions\Http\Client;

/**
 * The request could not be completed because the request specified a "Expect" request header that the server cannot
 * fulfill.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ExpectationFailedException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 417;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Expectation Failed: The request cannot be completed because the request you are making contains an Expect header that the server cannot fulfill.';
}
