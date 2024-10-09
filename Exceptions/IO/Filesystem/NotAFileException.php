<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\InvalidDataTag;

/**
 * Use this exception when your code tries to do something on a file but the passed on item is not a file.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotAFileException extends FilesystemException implements InvalidDataTag
{
    public const MESSAGE = 'Specified path is not a file';
    public const CODE = 0;
}
