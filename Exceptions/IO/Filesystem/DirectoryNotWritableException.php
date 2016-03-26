<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code tries to write content to a directory but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotWritableException extends FilesystemException
{
    public function __construct(
        $message = 'Cannot write to specified directory',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
