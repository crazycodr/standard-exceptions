<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\ForbiddenTag;

/**
 * Use this exception when your code tries to read the content of a file but cannot do so due to filesystem permissions.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotReadableException extends FilesystemException implements ForbiddenTag
{
    const MESSAGE = 'Cannot read from specified file';
    const CODE = 0;
}
