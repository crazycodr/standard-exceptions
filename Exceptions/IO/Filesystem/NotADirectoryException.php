<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code tries to do something on a directory but the passed on item is not a directory.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotADirectoryException extends FilesystemException
{
    const MESSAGE = 'Specified path is not a directory';
    const CODE = 0;
}
