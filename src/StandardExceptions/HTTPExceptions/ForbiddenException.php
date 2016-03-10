<?php

namespace StandardExceptions\HTTPExceptions;

/**
 * Use this exception when in an HTTP context where the request results in an incorrect sequence of operations
 * that cannot be allowed. Could be related to the permissions of the user or to the state of the application.
 *
 * This would map to a 403 but should not be returned as is to the user.
 *
 * Always consider using a layer that converts potential exceptions to standardized HTTP responses. Sending back an
 * exception text is not considered a valid response. Remember that an exception result is not a protocol compliant
 * message unless you make it so!
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ForbiddenException extends \RuntimeException
{
    public function __construct(
        $message = 'Authorization and credentials where sufficient but the operation is still forbidden due to your permissions',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
