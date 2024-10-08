<?php

namespace Exceptions\Helpers;

use Throwable;

/**
 * Defines an easy to reuse constructor that builds the exception using the defaults interface definition
 *
 * @package Exceptions
 */
trait DefaultConstructorTrait
{
    public function __construct(string $message = "", int $code = 0, null|Throwable $previous = null)
    {
        parent::__construct($message ?: $this->getDefaultMessage(), $code ?: $this->getDefaultCode(), $previous);
    }
}
