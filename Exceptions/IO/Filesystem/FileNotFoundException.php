<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\NotFoundException;

/**
 * Use this exception when your code tries to open a file but cannot find it.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FileNotFoundException extends FilesystemException implements NotFoundException
{
    public function __construct(
        $message = 'Cannot find specified file',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
