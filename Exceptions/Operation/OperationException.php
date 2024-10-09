<?php

namespace Exceptions\Operation;

use Exceptions\Helpers\DefaultsInterface;
use RuntimeException;
use Throwable;

/**
 * This is a tag like class that is used to regroup all Operation exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class OperationException extends RuntimeException implements OperationExceptionInterface, DefaultsInterface
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
        return static::MESSAGE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getDefaultCode(): int
    {
        return static::CODE;
    }
}
