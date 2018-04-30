<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\NotFoundException;

/**
 * Use this exception when your code tries to open a file but cannot find it.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotFoundException extends FilesystemException implements NotFoundException
{
    const MESSAGE = 'Cannot find specified file';
    const CODE = 0;
}
