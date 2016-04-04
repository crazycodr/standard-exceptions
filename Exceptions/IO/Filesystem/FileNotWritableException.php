<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code tries to write some content to a file but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotWritableException extends FilesystemException
{
    public function __construct(
        $message = 'Cannot write to specified file',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
