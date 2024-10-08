<?php

namespace Exceptions\Helpers;

/**
 * Represents the methods that should be implemented to retrieve the defaults for an exception
 *
 * @package Exceptions
 */
interface DefaultsInterface
{
    /**
     * Returns the default message for this exception
     */
    public static function getDefaultMessage(): string;

    /**
     * Returns the default error code for this exception
     */
    public static function getDefaultCode(): int;
}
