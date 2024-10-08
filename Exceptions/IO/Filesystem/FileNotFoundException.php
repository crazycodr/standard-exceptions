<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\NotFoundTag;

/**
 * Use this exception when your code tries to open a file but cannot find it.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotFoundException extends FilesystemException implements NotFoundTag
{
    public const MESSAGE = 'Cannot find specified file';
    public const CODE = 0;
}
