<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\NotFoundTag;

/**
 * The request could not be completed because the resource you are requesting is now gone. It might have been deleted
 * or moved somewhere else.
 *
 * Consider using 404 instead of 410 unless you want to have a different code for soft deleted resources.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class GoneException extends ClientErrorException implements NotFoundTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 410;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Gone: The request cannot be completed because the resource you are requesting has been moved or has changed state.';
}
