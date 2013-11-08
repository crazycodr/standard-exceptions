<?php
namespace StandardExceptions\IOExceptions;

/**
* Use this exception when an IO operation tries to open a local file 
* but cannot find it.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class FileNotFoundException extends \RuntimeException
{
    
    public function __construct($message = 'Cannot find specified file resource', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}