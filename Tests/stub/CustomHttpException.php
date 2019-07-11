<?php

declare(strict_types=1);

namespace Exceptions\Tests\stub;

use Exceptions\Http\HttpException;

class CustomHttpException extends HttpException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 101;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'This exception is used for tests only';

    /**
     * {@inheritdoc}
     */
    public static function getHttpCodeClass()
    {
        return 100;
    }
}
