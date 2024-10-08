<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\ExistsTag;

/**
 * Use this exception when your code tries to create a file, but it already exists.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileAlreadyExistsException extends FilesystemException implements ExistsTag
{
    public const MESSAGE = 'Cannot find specified file';
    public const CODE = 0;
}
