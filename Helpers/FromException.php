<?php
namespace Exceptions\Helpers;

/**
 * Implements a helper method that helps to create exception following other exceptions (Sets the $previous) for you.
 * This requires the ability to
 * @package Exceptions\Helpers
 */
trait FromException
{

    /**
     * Creates an exception of the implementing trait and sets the $previous exception for you.
     * If you do not provide a message and/or code, it will use the getMessage and getCode interface methods to
     * retrieve the defaults for that exception.
     *
     * @param \Throwable $ex
     * @param string $message to use, if null, will get the default exception message
     * @param int $code to use, if null, will get the default exception code
     *
     * @return static
     */
    public static function from(\Throwable $ex, string $message = null, int $code = null)
    {
        return new static($message ?? static::getDefaultMessage(), $code ?? static::getDefaultCode(), $ex);
    }
}
