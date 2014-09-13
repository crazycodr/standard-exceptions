<?php
namespace StandardExceptions\HttpExceptions;

/**
* Use this exception if the request cannot result in an
* acceptable result. When HTTP requests are sent, they are
* tagged with an acceptable return type. If your application
* cannot return the element represented in the acceptable types
* then you must return a NotAcceptableException.
*
* The HttpException is not a valid response, it's a signal!
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class NotAcceptableException extends \RuntimeException
{
    
    public function __construct($message = 'The resource cannot be represented this way', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}