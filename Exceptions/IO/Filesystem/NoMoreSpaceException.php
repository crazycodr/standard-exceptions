<?php

namespace Exceptions\IO\Filesystem;

/**
 * Use this exception when your code realizes that there is no more space available on the device to write to.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NoMoreSpaceException extends FilesystemException
{
    public const MESSAGE = 'Specified target location has run out of disk space';
    public const CODE = 0;
}
