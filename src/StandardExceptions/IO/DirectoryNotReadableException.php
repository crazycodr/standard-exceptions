<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to read the content of
* a directory but cannot do so due to filesystem permissions.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class DirectoryNotReadableException extends \RuntimeException
{
    
    public function __construct($message = 'Cannot read from specified directory resource', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}