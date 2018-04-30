<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code tries to read the content of a directory but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotReadableException extends FilesystemException
{
    const MESSAGE = 'Cannot read from specified directory';
    const CODE = 0;
}
