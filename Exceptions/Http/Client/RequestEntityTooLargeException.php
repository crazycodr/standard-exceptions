<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\InvalidDataTag;

/**
 * This is the old version of the new PayloadTooLargeException. Consider throwing the newer one instead.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @deprecated 3.0 Use PayloadTooLargeException instead
 * @see PayloadTooLargeException
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestEntityTooLargeException extends ClientErrorException implements InvalidDataTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 413;
    
    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Request Entity Too Large: The server is refusing to process a request because the message is larger than the server is willing or able to process.';
}
