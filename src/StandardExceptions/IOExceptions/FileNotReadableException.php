<?php

namespace StandardExceptions\IOExceptions;

/**
 * Use this exception when an IO operation tries to read the content of a file but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotReadableException extends \RuntimeException
{
    public function __construct($message = 'Cannot read from specified file resource', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
