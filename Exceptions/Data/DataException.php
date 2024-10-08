<?php

namespace Exceptions\Data;

use Exceptions\Helpers\DefaultsInterface;
use RuntimeException;
use Throwable;

/**
 * This is a tag like class that is used to regroup all Data exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class DataException extends RuntimeException implements DataExceptionInterface, DefaultsInterface
{
    public function __construct(string $message = "", int $code = 0, null|Throwable $previous = null)
    {
        parent::__construct($message ?: $this->getDefaultMessage(), $code ?: $this->getDefaultCode(), $previous);
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
