<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to open a local directory 
* but cannot find it.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class DirectoryNotFoundException extends \RuntimeException
{
    
}