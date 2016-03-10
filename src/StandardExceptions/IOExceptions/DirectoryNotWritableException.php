<?php

namespace StandardExceptions\IOExceptions;

/**
 * Use this exception when an IO operation tries to write some content to a directory (Usually creating files) but
 * cannot do so due to filesystem permissions.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotWritableException extends \RuntimeException
{
    public function __construct($message = 'Cannot write to specified directory resource', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
