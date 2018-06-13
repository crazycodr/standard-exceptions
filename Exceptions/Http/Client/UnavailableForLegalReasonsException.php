<?php

namespace Exceptions\Http\Client;

/**
 * The request could not be satisfied because a legal restriction was made on that resource. This should be mostly
 * used against resources that have been blocked for a legal demand but you can use it for anything that would cause
 * legal infringement.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnavailableForLegalReasonsException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 451;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Unavailable For Legal Reasons: The request cannot be fulfilled because it would act on a resource that is legally restricted or would cause a legal infringement.';
}
