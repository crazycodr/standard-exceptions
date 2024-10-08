<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\AlreadyExistsTag;

/**
 * Use this exception when your code tries to create a local directory, but it already exists.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryAlreadyExistsException extends FilesystemException implements AlreadyExistsTag
{
    public const MESSAGE = 'Cannot find specified directory';
    public const CODE = 0;
}
