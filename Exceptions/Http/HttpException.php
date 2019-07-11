<?php

namespace Exceptions\Http;

use Exceptions\Helpers\DefaultConstructorTrait;
use Exceptions\Helpers\DefaultsInterface;
use Exceptions\Helpers\FromException;
use Exceptions\Helpers\WithContext;

/**
 * This is a tag like class that is used to regroup all Http exceptions under a single base class.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class HttpException extends \RuntimeException implements HttpExceptionInterface, DefaultsInterface
{
    use FromException, DefaultConstructorTrait, WithContext;

    /**
     * {@inheritdoc}
     */
    public static function getDefaultMessage(): string
    {
        return static::HTTP_MESSAGE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getDefaultCode(): int
    {
        return static::HTTP_CODE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getHttpCode()
    {
        return static::HTTP_CODE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getHttpMessage()
    {
        return static::HTTP_MESSAGE;
    }
}
