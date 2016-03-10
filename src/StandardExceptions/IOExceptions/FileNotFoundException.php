<?php

namespace StandardExceptions\IOExceptions;

/**
 * Use this exception when an IO operation tries to open a local file but cannot find it.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotFoundException extends \RuntimeException
{
    public function __construct($message = 'Cannot find specified file resource', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
