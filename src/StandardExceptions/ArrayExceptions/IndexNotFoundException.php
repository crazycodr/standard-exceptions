<?php
namespace StandardExceptions\ArrayExceptions;

/**
* Use this exception when an operation on an array tries to retrieve an element using an index
* that doesn't exist. This exception should only be thrown for indexes (numeric).
*
* This exception is deprecated, you should instead migrate to KeyNotFoundException as soon
* as possible as this exception is only kept for backward compatibility with the old
* OutOfRangeException from PHP SPL.
*
* @deprecated in favor of \StandardExceptions\Array\KeyNotFoundException, will be removed in version 2.0
* 
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class IndexNotFoundException extends \OutOfRangeException
{
    
    public function __construct($message = 'Index not found in array/collection', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}