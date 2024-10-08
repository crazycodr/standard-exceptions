<?php

namespace Exceptions\Helpers;

use Throwable;

/**
 * Implements a helper method that helps to create exception following other exceptions (Sets the $previous) for you.
 *
 * @package Exceptions\Helpers
 */
trait FromException
{
    /**
     * Creates an exception implementing the trait and sets the $previous exception for you.
     * If you do not provide a message and/or code, it will use the getMessage and getCode interface methods to
     * retrieve the defaults for that exception.
     *
     * @param Throwable $ex
     * @param string|null $message to use, if null, will get the default exception message
     * @param int|null $code to use, if null, will get the default exception code
     *
     * @return static
     */
    public static function from(Throwable $ex, null|string $message = null, null|int $code = null): static
    {
        return new static($message ?? static::getDefaultMessage(), $code ?? static::getDefaultCode(), $ex);
    }
}
