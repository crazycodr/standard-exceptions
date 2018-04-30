<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO operation that requires a distant connection is refused as you are negotiating the
 * connection with the external resource.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ConnectionRefusedException extends NetworkException
{
    const MESSAGE = 'Connection to remote host was refused';
    const CODE = 0;
}
