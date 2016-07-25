<?php

namespace Exceptions\IO\Filesystem;

use Exceptions\Tag\AlreadyExistsException;

/**
 * Use this exception when your code tries to create a local directory but it already exists.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class DirectoryAlreadyExistsException extends FilesystemException implements AlreadyExistsException
{
    public function __construct(
        $message = 'Cannot find specified directory',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
