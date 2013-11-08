<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation that requires a distant connection
* gets cut off after negotiating connection.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ConnectionLostException extends \RuntimeException
{
    
}