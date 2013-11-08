<?php
namespace StandardExceptions\Array;

/**
* Use this exception when validating keys for your array based objects. If a key has an
* invalid format because you enforce one, throw this exception instead of an InvalidFormatException.
*
* Note that there are no InvalidIndexException as an index should always be numeric per definition
* thus only InvalidKeyException exists.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidKeyException extends \RuntimeException
{
    
    public function __construct($message = 'Format of key is invalid for this array/collection', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}