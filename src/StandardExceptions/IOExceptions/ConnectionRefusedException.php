<?php
namespace StandardExceptions\IOExceptions;

/**
* Use this exception when an IO operation that requires a distant connection
* is refused as you are negotiating the connection with the external resource.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ConnectionRefusedException extends \RuntimeException
{
    
    public function __construct($message = 'Connection to remote host was refused', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}