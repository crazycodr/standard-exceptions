<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to write some content to
* a directory (Usually creating files) but cannot do so due to filesystem permissions.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class DirectoryNotWritableException extends \RuntimeException
{
    
}