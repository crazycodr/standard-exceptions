<?php

namespace Exceptions\Data;

/**
 * Use this exception when the data requested by your code was found and it found actually more than expected. A good
 * use for this is the findSingle usual function we find in many library and orm. If you have more than 1 record
 * found, it might mean that you should send back this exception.
 *
 * If the code in context is a service provider that queries a database, this would be the right exception to throw
 * and listen for. The controller on the other hand would catch this and throw a NotFoundException from the Http
 * namespace which would be converted to a standardized message in the front controller.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FoundTooManyException extends DataException
{
    public function __construct(
        $message = 'Found too many items in the data source.',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
