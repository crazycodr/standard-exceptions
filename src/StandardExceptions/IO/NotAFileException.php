<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to do something on a
* file but the passed on item is not a file. (Such as a directory instead)
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class NotAFileException extends \RuntimeException
{
    
}