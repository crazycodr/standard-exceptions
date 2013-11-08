<?php
namespace StandardExceptions\ValidationExceptions;

/**
* Use this exception when the date being passed is of an invalid format that
* ends up being unparsable.
*
* Refrain from using this to signal incorrect dates in regards to the domain
* model. Instead use InvalidValueException if this situation occurs.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidDateTimeFormatException extends InvalidFormatException
{
    
    public function __construct($message = 'Date/Time data could not be parsed into real date', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}