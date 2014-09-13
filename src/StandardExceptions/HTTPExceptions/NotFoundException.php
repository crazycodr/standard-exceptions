<?php
namespace StandardExceptions\HttpExceptions;

/**
* Use this exception when an operation relative to HTTP
* results in a resource that cannot be found. Note that the
* fact the resource cannot be found must not be done in relation
* to a bad request. If parameters are missing which prevents you
* from finding the resource, you must return a bad request exception.
*
* The HttpException is not a valid response, it's a signal!
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class NotFoundException extends \RuntimeException
{
    
    public function __construct($message = 'Requested resource cannot be found', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}