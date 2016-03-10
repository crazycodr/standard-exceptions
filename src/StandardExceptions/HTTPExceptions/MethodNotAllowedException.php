<?php

namespace StandardExceptions\HTTPExceptions;

/**
 * Use this exception when in an HTTP context where the request results in the request of a HTTP method that does not
 * exist on the requested resource. Be careful not to mix ForbiddenException which is a limitation due to business
 * rules or workflow! This is the 404 of methods!
 *
 * This would map to a 406 but should not be returned as is to the user.
 *
 * Always consider using a layer that converts potential exceptions to standardized HTTP responses. Sending back an
 * exception text is not considered a valid response. Remember that an exception result is not a protocol compliant
 * message unless you make it so!
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class MethodNotAllowedException extends \RuntimeException
{
    public function __construct(
        $message = 'The method was not allowed or expected for this resource',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
