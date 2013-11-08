<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to open a local directory 
* but cannot find it.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class DirectoryNotFoundException extends \RuntimeException
{
    
    public function __construct($message = 'Cannot find specified directory resource', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}