<?php

namespace Exceptions\Http\Client;

/**
 * The request could not be completed because the request specified contains either too many header fields or one
 * field or the totality of the header fields contain too much data. This exception is related to
 * PayloadTooLargeException but is aimed at requests that are too big in terms of header data.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestHeaderFieldsTooLargeException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 431;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Request Header Fields Too Large: The request contained too much data in the header fields or one specific field contained too much data in it.';
}
