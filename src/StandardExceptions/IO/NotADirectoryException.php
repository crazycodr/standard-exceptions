<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to do something on a
* directory but the passed on item is not a directory. (Such as a file instead)
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class NotADirectoryException extends \RuntimeException
{
    
    public function __construct($message = 'Target resource is not a directory', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}