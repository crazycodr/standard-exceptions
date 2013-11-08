<?php
namespace StandardExceptions\Validation;

/**
* Use this exception when the information being passed on to your function
* detects an invalid string in terms of domain validation. For example,
* the value must be within a certain range or in a set of valid values but isn't.
* 
* Refrain from using this exception in the event you want to certify the hard type
* passed to the function is right. If you force a (string) to be received but receive
* a (int), throw a \Logic\IllegalArgumentTypeException instead.
*
* Note: Forcing scalar parameter types in PHP goes against the type juggling principle
* of PHP, you should not force scalar variables to be of a certain type.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidStringException extends InvalidValueException
{
    
    public function __construct($message = 'The data is not a valid string for this operation', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}