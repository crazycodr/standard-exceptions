<?php
namespace StandardExceptions\ValidationExceptions;

/**
* Use this exception when the string being passed on to your function
* detects that the email being passed on is of incorrect format.
*
* Refrain from using this exception as a signal for non-existent emails
* validated using remote detection methods. If an email is invalid due
* to the fact that the SMTP server doesn't respond or if the SMTP tells
* you that the user doesn't exist use an InvalidOperationException instead.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidEmailFormatException extends InvalidFormatException
{
    
    public function __construct($message = 'Email could not be parsed', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}