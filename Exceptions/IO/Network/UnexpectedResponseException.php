<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO operation based on a communication protocol receives an unexpected response from
 * the remote host.
 *
 * For example, establishing an FTP connection on a SFTP server will yield unexpected communication dialog. In
 * this event, an UnexpectedResponseException should be thrown.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnexpectedResponseException extends NetworkException
{
    public const MESSAGE = 'Unexpected response received while communicating with remote host';
    public const CODE = 0;
}
