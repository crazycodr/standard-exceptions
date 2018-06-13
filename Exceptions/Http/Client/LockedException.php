<?php

namespace Exceptions\Http\Client;

/**
 * The request was received but the server refused to fulfill it because it would affect/access a resource that is
 * locked by another process somewhere.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class LockedException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 423;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Locked: The request cannot be completed because the resource you are trying to access is locked by another process.';
}
