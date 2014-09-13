<?php
namespace StandardExceptions\HttpExceptions;

/**
* Use this exception when an operation relative to HTTP
* resource (mostly update or creation) results in invalid values
* that cannot be accepted by the application.
*
* The difference between 400 and 422 is that 400 is for missing structural
* elements in the request while 422 is for invalid values due to business
* rules being infringed.
* 
* Note that you should not mix HTTP and validation. A validation class
* can be used in another context than an HTTP request. But if your controler
* needs to warn you that your http request is invalid, use this.
*
* Generally speaking a validator returns a validation except caught by the controller
* and the controller throws an HTTP exception that signals the return of an
* HTTP error response (400 or 500).
*
* The HttpException is not a valid response, it's a signal!
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class UnprocessableEntityException extends \RuntimeException
{
    
    public function __construct($message = 'Request resulted in a resource that is not processable due to business rules. Check the errors below to understand what went wrong.', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}