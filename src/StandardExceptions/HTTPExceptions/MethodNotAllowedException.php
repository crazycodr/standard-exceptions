<?php
namespace StandardExceptions\HttpExceptions;

/**
* Use this exception if the request method is invalid in the 
* current resource context.
*
* The HttpException is not a valid response, it's a signal!
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class MethodNotAllowedException extends \RuntimeException
{
    
    public function __construct($message = 'The method was not allowed or expected for this resource', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}