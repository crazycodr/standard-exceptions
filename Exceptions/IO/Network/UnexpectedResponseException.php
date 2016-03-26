<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO operation based on a communication protocol receives an unexpected response from
 * the remote host.
 *
 * For example, establishing an FTP connection on a SFTP server will yield unexpected communication dialog. In
 * this event, an UnexpectedResponseException should be thrown.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnexpectedResponseException extends NetworkException
{
    public function __construct(
        $message = 'Unexpected response received while communicating with remote host',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
