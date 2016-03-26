<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code tries to read the content of a directory but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotReadableException extends FilesystemException
{
    public function __construct(
        $message = 'Cannot read from specified directory',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
