<?php
namespace StandardExceptions\Array;

/**
* Use this exception when an operation on an array item that is locked/read-only
* tries to modify the item in question.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ReadOnlyArrayItemException extends \RuntimeException
{
    
}