<?php

namespace StandardExceptions\IOExceptions;

/**
 * Use this exception when an IO operation tries to open a local directory but cannot find it.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotFoundException extends \RuntimeException
{
    public function __construct($message = 'Cannot find specified directory resource', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
