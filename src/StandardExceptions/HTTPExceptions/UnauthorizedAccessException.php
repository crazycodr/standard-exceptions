<?php

namespace StandardExceptions\HTTPExceptions;

/**
 * Use this exception when in an HTTP context where the request results in an access to a resource that cannot be
 * accessed due to current authentication. Although this should be used in many cases such as incorrect permissions,
 * the web as evolved to a state where this represents just a lack of authentication. Use ForbiddenException when
 * user is authenticated but does not have the privilege to edit the resource.
 *
 * This would map to a 401 but should not be returned as is to the user.
 *
 * Always consider using a layer that converts potential exceptions to standardized HTTP responses. Sending back an
 * exception text is not considered a valid response. Remember that an exception result is not a protocol compliant
 * message unless you make it so!
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnauthorizedAccessException extends \RuntimeException
{
    public function __construct(
        $message = 'Current credentials and identification is not enough to authorize operation',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
