<?php

namespace Exceptions\Http\Server;

use Exceptions\Http\HttpException;

/**
 * All server error http exceptions extend this class and save you the trouble of setting up the method that returns
 * the error class code.
 */
abstract class ServerErrorException extends HttpException implements ServerErrorExceptionInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getHttpCodeClass()
    {
        return self::CODE_CLASS_SERVER_ERROR;
    }
}
