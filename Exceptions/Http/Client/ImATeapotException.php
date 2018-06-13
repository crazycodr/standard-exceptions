<?php

namespace Exceptions\Http\Client;

/**
 * The request could not be completed because the request specified a "Expect" request header that the server cannot
 * fulfill.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @deprecated 1998.4.1 Will be removed eventually...
 * @see https://tools.ietf.org/html/rfc2324
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ImATeapotException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 418;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'I\'m a teapot: Why are you asking me to do this?';
}
