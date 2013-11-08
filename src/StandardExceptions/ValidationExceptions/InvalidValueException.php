<?php
namespace StandardExceptions\ValidationExceptions;

/**
* The base of all validation exceptions. If none of the exceptions 
* that actually exist fit in correctly, you can try and throw this but
* it would be better to define something a little more precise as any other
* validation exception in the standard exceptions framework is an
* InvalidValueException. This could lead to unforseen logic errors.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidValueException extends \RangeException
{
    
    public function __construct($message = 'The data passed on is invalid for this operation', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}