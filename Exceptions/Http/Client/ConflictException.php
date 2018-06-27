<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\InvalidDataTag;

/**
 * The request could not be completed due to a conflict with the current state of the resource.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ConflictException extends ClientErrorException implements InvalidDataTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 409;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Conflict: The request could not be completed due to a conflict with the current state of the resource. Fix the errors that are producing the conflict and then try again. This error is often caused by desynchronized states between client and server, something changed on one or the other and the resources are out of sync.';
}
