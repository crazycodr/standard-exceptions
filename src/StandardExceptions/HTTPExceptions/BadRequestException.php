<?php

namespace StandardExceptions\HTTPExceptions;

/**
 * Use this exception when in an HTTP context where the request results in a wrongly formatted request (Missing
 * keys/values, incorrect domain values, etc).
 *
 * This would map to a 400 but should not be returned as is to the user.
 *
 * Always consider using a layer that converts potential exceptions to standardized HTTP responses. Sending back an
 * exception text is not considered a valid response. Remember that an exception result is not a protocol compliant
 * message unless you make it so!
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class BadRequestException extends \RuntimeException
{
    public function __construct(
        $message = 'Request was malformed, check error messages for more information',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
