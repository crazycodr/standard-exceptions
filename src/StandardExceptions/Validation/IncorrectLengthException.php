<?php
namespace StandardExceptions\Validation;

/**
* Use this exception when the length of a string is invalid
* based on other parameters or domain validation.
* 
* This exception is only used for backwards compatibility with
* SPL's LengthException.
*
* @deprecated in favor of \StandardExceptions\Validation\InvalidLengthException, will be removed in version 2.0
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class IncorrectLengthException extends \LengthException
{
    
}