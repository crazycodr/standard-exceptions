<?php

namespace Exceptions\Http\Server;

/**
 * This server detected that the request generated an endless loop while processing the request. This should be used
 * only if you cannot properly throw a 403 beforehand by detecting that the request would create an endless loop.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class LoopDetectedException extends ServerErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    public const HTTP_CODE = 508;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'Loop Detected: The request is looping endlessly trying to produce the response.';
}
