<?php
namespace StandardExceptions\Array;

/**
* Use this exception when an operation on an array
* cannot be achieved because the array has already reached it's limit
* and cannot accept more data.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ArrayIsFullException extends \RuntimeException
{
    
}