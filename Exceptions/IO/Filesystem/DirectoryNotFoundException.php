<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\NotFoundException;

/**
 * Use this exception when your code tries to open a local directory but cannot find it.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryNotFoundException extends FilesystemException implements NotFoundException
{
    public function __construct(
        $message = 'Cannot find specified directory',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
