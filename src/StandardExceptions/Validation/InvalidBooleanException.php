<?php
namespace StandardExceptions\Validation;

/**
* Use this exception when the information being passed on to your function
* detects an invalid boolean in terms of domain validation. For example,
* the value must be within a certain range or in a set of valid values but isn't.
* 
* Refrain from using this exception in the event you want to certify the hard type
* passed to the function is right. If you force a (bool) to be received but receive
* a (string), throw a \Logic\IllegalArgumentTypeException instead.
*
* Note: Forcing scalar parameter types in PHP goes against the type juggling principle
* of PHP, you should not force scalar variables to be of a certain type.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidBooleanException extends InvalidValueException
{
    
}