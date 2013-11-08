<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation that requires a distant connection
* gets cut off after negotiating connection.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ConnectionLostException extends \RuntimeException
{
    
    public function __construct($message = 'Connection lost while exchanging data with remote host', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}