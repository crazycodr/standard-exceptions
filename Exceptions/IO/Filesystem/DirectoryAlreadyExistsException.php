<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\AlreadyExistsException;

/**
 * Use this exception when your code tries to create a local directory but it already exists.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryAlreadyExistsException extends FilesystemException implements AlreadyExistsException
{
    const MESSAGE = 'Cannot find specified directory';
    const CODE = 0;
}
