<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\ForbiddenTag;

/**
 * Use this exception when your code tries to write some content to a file but cannot do so due to filesystem
 * permissions.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotWritableTag extends FilesystemException implements ForbiddenTag
{
    const MESSAGE = 'Cannot write to specified file';
    const CODE = 0;
}
