<?php

namespace Exceptions\Http\Server;

/**
 * This server cannot process the request because it doesn't have enough space to complete the request. This could be
 * sent back if a server runs out of space in general or if the request cannot be completed due to limitations to the
 * response size that you are ready to generate.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InsuficientStorageException extends ServerErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 507;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Insuficient Storage: This server cannot process the request because it would/has run out of space while producing the response. Alternatively, this could also mean the server ran out of disk space or that your request has limited resources and that makes the request impossible to fulfill.';
}
