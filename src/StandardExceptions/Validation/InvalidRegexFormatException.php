<?php
namespace StandardExceptions\Validation;

/**
* Use this exception when the string being passed on to your function
* detects that the regex being passed on is of incorrect format and
* refused by preg functions or similar functions.
*
* Refrain from using this exception as a signal for invalid value that
* did not match the regex, instead throw an InvalidValueException instead.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidRegexFormatException extends InvalidFormatException
{
    
}