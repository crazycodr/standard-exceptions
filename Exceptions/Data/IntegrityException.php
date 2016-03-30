<?php

namespace Exceptions\Data;

use Exceptions\Tag\InvalidDataException;

/**
 * Use this exception when the data passed to your code would create an integrity issue. For example, the storage
 * engine you are using complains that a foreign key or constraint is being violated.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class IntegrityException extends DataException implements InvalidDataException
{
    public function __construct(
        $message = 'Data provided is not of the expected format or cannot be parsed correctly.',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
