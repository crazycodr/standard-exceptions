<?php
namespace StandardExceptions\Validation;

/**
* Use this exception when the string being passed on to your function
* detects that the JSON being passed on is of incorrect format.
*
* Refrain from using this exception as a signal for invalid structure of
* JSON being passed. Your internal validation that the model received
* should throw a standard InvalidValueException or something more customized.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidJSONFormatException extends InvalidFormatException
{
    
}