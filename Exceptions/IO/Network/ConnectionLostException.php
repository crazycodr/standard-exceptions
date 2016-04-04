<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO operation that requires a distant connection gets cut off after negotiating
 * connection.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ConnectionLostException extends NetworkException
{
    public function __construct(
        $message = 'Connection lost while exchanging data with remote host',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
