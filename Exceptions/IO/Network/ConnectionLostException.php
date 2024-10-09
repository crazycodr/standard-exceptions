<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO operation that requires a distant connection gets cut off after negotiating
 * connection.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ConnectionLostException extends NetworkException
{
    public const MESSAGE = 'Connection lost while exchanging data with remote host';
    public const CODE = 0;
}
