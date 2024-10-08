<?php

namespace Exceptions\Helpers;

use Throwable;

/**
 * Implements a set of helper methods that creates exceptions to attach and retrieve contextual data.
 *
 * @package Exceptions\Helpers
 */
trait WithContext
{
    /**
     * Contains the contextual information attached to the exception
     */
    protected mixed $context = null;

    /**
     * Creates an exception implementing a trait and sets the $context of that exception for you.
     * If you do not provide a message and/or code, it will use the getMessage and getCode interface methods to
     * retrieve the defaults for that exception.
     *
     * @param $context
     * @param string|null $message to use, if null, will get the default exception message
     * @param int|null $code to use, if null, will get the default exception code
     * @param Throwable|null $previous [optional] The previous throwable used for the exception chaining.
     *
     * @return static
     */
    public static function withContext($context, string $message = null, int $code = null, Throwable $previous = null): static
    {
        $ex = new static($message ?? static::getDefaultMessage(), $code ?? static::getDefaultCode(), $previous);
        $ex->context = $context;
        return $ex;
    }

    /**
     * Returns the saved context from the exception
     */
    public function getContext(): mixed
    {
        return $this->context;
    }
}
