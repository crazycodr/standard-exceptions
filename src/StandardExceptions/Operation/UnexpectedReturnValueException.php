<?php
namespace StandardExceptions\Operation;

/**
* Use this exception in the event that an operation that expected
* a certain result from a sub function/method call but didn't get
* what i expected. This exception is the reversed validation exception.
* Instead of validating the user's input to a function, it is a means
* to signal that something went wrong when calling a sub components and
* the result is unexpected.
* 
* It was created only for backwards compatibility with UnexpectedValueException.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class UnexpectedReturnValueException extends \UnexpectedValueException
{
    
    public function __construct($message = 'Unexpected value returned by internal call', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}