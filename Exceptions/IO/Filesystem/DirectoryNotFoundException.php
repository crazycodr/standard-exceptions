<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\NotFoundException;

/**
 * Use this exception when your code tries to open a local directory but cannot find it.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotFoundException extends FilesystemException implements NotFoundException
{
    const MESSAGE = 'Cannot find specified directory';
    const CODE = 0;
}
