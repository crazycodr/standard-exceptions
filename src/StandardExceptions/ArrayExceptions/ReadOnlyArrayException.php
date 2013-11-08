<?php
namespace StandardExceptions\ArrayExceptions;

/**
* Use this exception when an operation on an array that is locked/read-only
* tries to modify the collection of items.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ReadOnlyArrayException extends \RuntimeException
{
    
    public function __construct($message = 'Array/Collection is read-only, you cannot alter it', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}