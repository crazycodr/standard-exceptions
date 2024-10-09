<?php

namespace Exceptions\Http\Client;

/**
 * The request was received but the server refused to fulfill it because a dependency cannot be met. This could apply
 * to a series of requests to execute in a certain workflow (WebDAV uses this in a PROPPATCH scenario) but you can also
 * apply this to any other workflow error.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FailedDependencyException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    public const HTTP_CODE = 424;

    /**
     * Returns the HTTP error message for that exception.
     */
    public const HTTP_MESSAGE = 'Failed Dependency: The request cannot be completed because an underlying process failed to complete properly or there is a dependency that cannot be met around the process.';
}
