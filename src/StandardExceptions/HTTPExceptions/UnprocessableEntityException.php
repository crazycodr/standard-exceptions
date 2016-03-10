<?php

namespace StandardExceptions\HTTPExceptions;

/**
 * Use this exception when in an HTTP context where the request results in an incorrect entity representation after
 * validation. This is different from BadRequestException or ForbiddenException in a sense that the original
 * request is valid both in structure and data AND is valid in the workflow. But once you are about to apply the
 * change, the workflow results in an invalid entity because of various other reasons (Often related to Business rules).
 *
 * This would map to a 422 but should not be returned as is to the user.
 *
 * Always consider using a layer that converts potential exceptions to standardized HTTP responses. Sending back an
 * exception text is not considered a valid response. Remember that an exception result is not a protocol compliant
 * message unless you make it so!
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnprocessableEntityException extends \RuntimeException
{
    public function __construct(
        $message = 'Request resulted in a resource that is not processable due to business rules. Check the errors below to understand what went wrong.',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
