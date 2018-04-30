<?php

namespace Exceptions\IO\Network;

/**
 * Use this exception when an IO operation tries to reach a remote host that cannot be resolved due to DNS or IP
 * issues.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnknownHostException extends NetworkException
{
    const MESSAGE = 'The specified resource\'s hostname could not be resolved';
    const CODE = 0;
}
