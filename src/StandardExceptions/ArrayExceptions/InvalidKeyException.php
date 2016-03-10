<?php

namespace StandardExceptions\ArrayExceptions;

/**
 * Use this exception when validating keys for your array based objects. If a key has an invalid format because you
 * enforce one, throw this exception instead of an InvalidFormatException.
 *
 * Note that there are no InvalidIndexException as an index should always be numeric per definition thus only
 * InvalidKeyException exists.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidKeyException extends \RuntimeException
{
    public function __construct(
        $message = 'Format of key is invalid for this array/collection',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
