<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\ForbiddenTag;

/**
 * Use this exception when your code tries to write content to a directory but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotWritableException extends FilesystemException implements ForbiddenTag
{
    const MESSAGE = 'Cannot write to specified directory';
    const CODE = 0;
}
