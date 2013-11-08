<?php
namespace StandardExceptions\IOExceptions;

/**
* Use this exception when an IO operation tries to do something on a
* file but the passed on item is not a file. (Such as a directory instead)
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class NotAFileException extends \RuntimeException
{
    
    public function __construct($message = 'Target resource is not a file', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}