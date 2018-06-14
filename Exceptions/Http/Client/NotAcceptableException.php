<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\InvalidDataTag;

/**
 * The resource identified by the request is only capable of generating response entities which have content
 * characteristics not acceptable according to the accept headers sent in the request.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotAcceptableException extends ClientErrorException implements InvalidDataTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 406;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Not Acceptable: The resource identified by the request is only capable of generating response entities which have content characteristics not acceptable according to the accept headers sent in the request.';
}
