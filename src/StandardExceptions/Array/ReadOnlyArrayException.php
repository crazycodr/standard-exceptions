<?php
namespace StandardExceptions\Array;

/**
* Use this exception when an operation on an array that is locked/read-only
* tries to modify the collection of items.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ReadOnlyArrayException extends \RuntimeException
{
    
}