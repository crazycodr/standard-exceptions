<?php
namespace Exceptions\Helpers;

/**
 * Implements a set of helper methods that creates exceptions to attach and retrieve contextual data.
 * 
 * @package Exceptions\Helpers
 */
trait WithContext
{

    protected $context = null;

    /**
     * Creates an exception of the implementing trait and sets the $context of that exception for you.
     * If you do not provide a message and/or code, it will use the getMessage and getCode interface methods to
     * retrieve the defaults for that exception.
     *
     * @param mixed context to save to the exception
     * @param string $message to use, if null, will get the default exception message
     * @param int $code to use, if null, will get the default exception code
     *
     * @return static
     */
    public static function withContext($context, string $message = null, int $code = null)
    {
        $ex = new static($message ?? static::getDefaultMessage(), $code ?? static::getDefaultCode());
        $ex->context = $context;
        return $ex;    
    }

    /**
     * Returns the saved context from the exception
     * 
     * @return mixed
     */
    public function getContext() {
        return $this->context;
    }
    
}
