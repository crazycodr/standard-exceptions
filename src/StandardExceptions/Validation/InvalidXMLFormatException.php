<?php
namespace StandardExceptions\Validation;

/**
* Use this exception when the string being passed on to your function
* detects that the XML being passed on is of incorrect format and
* cannot be parsed correctly by your XML parser.
*
* Refrain from using this exception as a signal for invalid values that
* did not match the domain validation that occurs after parsed, 
* instead throw an InvalidValueException instead.
*
* Note: Since XML comes with schema validation that may enforce value
* validation, it is ok to throw InvaldXMLException when schema fails to
* validation structure before parsing, it still is a parse refusal by the
* XML parsing engine and not some domain validation that you coded.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidXMLFormatException extends InvalidFormatException
{
    
    public function __construct($message = 'XML data could not be parsed', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}