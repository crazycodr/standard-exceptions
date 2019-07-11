<?php

namespace Exceptions\IO;

use Exceptions\Helpers\DefaultConstructorTrait;
use Exceptions\Helpers\DefaultsInterface;
use Exceptions\Helpers\FromException;
use Exceptions\Helpers\WithContext;

/**
 * This is a tag like class that is used to regroup all IO exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class IOException extends \RuntimeException implements IOExceptionInterface, DefaultsInterface
{
    use FromException, DefaultConstructorTrait, WithContext;

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
