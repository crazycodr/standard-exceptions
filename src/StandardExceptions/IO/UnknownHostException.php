<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to reach a remote host that
* cannot be resolved due to DNS or IP issues.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class UnknownHostException extends \RuntimeException
{
    
    public function __construct($message = 'The specified resource\'s hostname could not be resolved', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}