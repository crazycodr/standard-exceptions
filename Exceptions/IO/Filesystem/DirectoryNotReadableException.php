<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\ForbiddenTag;

/**
 * Use this exception when your code tries to read the content of a directory but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotReadableException extends FilesystemException implements ForbiddenTag
{
    public const MESSAGE = 'Cannot read from specified directory';
    public const CODE = 0;
}
