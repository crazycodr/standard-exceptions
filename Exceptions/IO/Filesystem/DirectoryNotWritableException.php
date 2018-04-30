<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code tries to write content to a directory but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotWritableException extends FilesystemException
{
    const MESSAGE = 'Cannot write to specified directory';
    const CODE = 0;
}
