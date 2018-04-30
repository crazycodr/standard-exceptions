<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\AlreadyExistsException;

/**
 * Use this exception when your code tries to create a file but it already exists.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileAlreadyExistsException extends FilesystemException implements AlreadyExistsException
{
    const MESSAGE = 'Cannot find specified file';
    const CODE = 0;
}
