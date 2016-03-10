<?php

namespace StandardExceptions\HTTPExceptions;

/**
 * Use this exception when in an HTTP context where the request results in an entity that does not exist. If the
 * resource does not exist, you should be returning this exception!
 *
 * This would map to a 404 but should not be returned as is to the user.
 *
 * Always consider using a layer that converts potential exceptions to standardized HTTP responses. Sending back an
 * exception text is not considered a valid response. Remember that an exception result is not a protocol compliant
 * message unless you make it so!
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotFoundException extends \RuntimeException
{
    public function __construct($message = 'Requested resource cannot be found', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
