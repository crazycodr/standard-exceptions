<?php
namespace StandardExceptions\Array;

/**
* Use this exception when an operation on an array tries to add an element using a key
* that already exists in the collection of items.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class KeyAlreadyExistsException extends \RuntimeException
{
    
    public function __construct($message = 'Key already exists in array/collection', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}