<?php
namespace StandardExceptions\Array;

/**
* Use this exception when an operation on an array
* cannot be achieved because the array is already empty.
*
* This exception is deprecated, you should instead migrate to ArrayIsEmptyException as soon
* as possible as this exception is only kept for backward compatibility with the old
* UnderflowException from PHP SPL.
*
* @deprecated in favor of \StandardExceptions\Array\ArrayIsEmptyException, will be removed in version 2.0
* 
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ArrayUnderflowException extends \UnderflowException
{
    
}