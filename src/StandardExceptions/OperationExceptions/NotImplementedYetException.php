<?php
namespace StandardExceptions\OperationExceptions;

/**
* Use this exception when someone is calling a function/method that
* is not implemented yet. This is a good practice when implementing a lot
* of new functionality. Coupled to unit tests, you shouldn't miss a
* NotImplementedYetException but at least the message is more verbose.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class NotImplementedYetException extends InvalidOperationException
{
    
    public function __construct($message = 'Feature not implemented yet', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}