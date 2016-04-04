<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO operation tries to reach a remote host that cannot be resolved due to DNS or IP
 * issues.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnknownHostException extends NetworkException
{
    public function __construct(
        $message = 'The specified resource\'s hostname could not be resolved',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
