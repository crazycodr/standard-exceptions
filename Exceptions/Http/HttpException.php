<?php

namespace Exceptions\Http;

use Exceptions\Helpers\DefaultsInterface;
use RuntimeException;
use Throwable;

/**
 * This is a tag like class that is used to regroup all Http exceptions under a single base class.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class HttpException extends RuntimeException implements HttpExceptionInterface, DefaultsInterface
{
    public function __construct(
        string         $message = "",
        int            $code = 0,
        null|Throwable $previous = null
    ) {
        parent::__construct(
            message:  $message ?: $this->getDefaultMessage(),
            code:     $code ?: $this->getDefaultCode(),
            previous: $previous
        );
    }

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
    public static function getHttpCode(): int
    {
        return static::HTTP_CODE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getHttpMessage(): string
    {
        return static::HTTP_MESSAGE;
    }
}
