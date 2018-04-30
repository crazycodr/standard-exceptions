<?php

namespace Exceptions\Operation;

use Exceptions\Tag\OperationAbortedException;

/**
 * The user trying to execute an operation is not allowed to perform the operation expected. This results in an
 * incomplete operation but not necessarily in a full request denial. This exception is the big brother
 * of the HTTP forbidden exception.
 *
 * Note that you should catch this exception at your HTTP kernel level and convert it to HTTP Forbidden exception
 * that match the HTTP response code 403. You can still catch this and resolve the error the way you wish as catching
 * this error doesn't mean the whole request that was asked for should be denied.
 *
 * Also note that permission errors should revolve around authorization exceptions but it is still very valid to use
 * forbidden exceptions in the context. The debate is fierce!
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ForbiddenException extends OperationException implements OperationAbortedException
{
    public function __construct(
        $message = 'Requested operation could not be executed because of a lack of permission',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
