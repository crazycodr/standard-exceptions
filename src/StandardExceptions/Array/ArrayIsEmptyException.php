<?php
namespace StandardExceptions\Array;

/**
* Use this exception when an operation on an array
* cannot be achieved because the array is already empty.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ArrayIsEmptyException extends \RuntimeException
{
    
    public function __construct($message = 'Cannot remove items from array/collection, it is already empty', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}