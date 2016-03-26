<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code tries to do something on a file but the passed on item is not a file.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotAFileException extends FilesystemException
{
    public function __construct(
        $message = 'Specified path is not a file',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
