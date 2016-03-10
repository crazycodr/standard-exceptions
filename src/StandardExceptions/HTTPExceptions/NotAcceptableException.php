<?php

namespace StandardExceptions\HTTPExceptions;

/**
 * Use this exception when in an HTTP context where the request results in an incorrect acceptable content-type.
 * Either the content-type is not understood or the content-type is not valid for the resource.
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
class NotAcceptableException extends \RuntimeException
{
    public function __construct($message = 'The resource cannot be represented this way', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
