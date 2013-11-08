<?php
namespace StandardExceptions\Logic;

/**
* Use this exception when an argument passed on to a function doesn't
* fit in the natural domain logic such as the 8th day of a week
* or a division by 0. It goes farther than the usual Validation exception
* in a sense that it checks for Illegal values more than invalid values.
* 
* This exception exists only to be backwards compatible with the
* DomainException but should be replaced in favor InvalidValueException
* from the Validation namespace.
*
* @deprecated in favor of \StandardExceptions\Validation\InvalidValueException, will be removed in version 2.0
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class IllegalValueException extends \DomainException
{
    
}