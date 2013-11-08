<?php
namespace StandardExceptions\OperationExceptions;

/**
* Use this exception in the event that a function being called doesn't
* comply with the signature of the called function. Technically, this happens
* only at the PHP level and not at the user level but it was ported
* from the SPL just in case someone finds a reason for it although it
* seems highly unlikely to be usable in the PHP userland.
* 
* This exception is only used for backwards compatibility with
* SPL's BadFunctionCallException.
*
* @deprecated in favor of \StandardExceptions\OperationExceptions\InvalidOperationException, will be removed in version 2.0
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class BadFunctionCallException extends \BadFunctionCallException
{
    
    public function __construct($message = 'The call to specified function is invalid because of argument mismatch', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}