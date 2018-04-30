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
     *
     * @return string
     */
    public static function getDefaultMessage(): string;

    /**
     * Returns the default error code for this exception
     *
     * @return int
     */
    public static function getDefaultCode(): int;
}
