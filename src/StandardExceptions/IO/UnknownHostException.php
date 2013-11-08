<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to reach a remote host that
* cannot be resolved due to DNS or IP issues.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class UnknownHostException extends \RuntimeException
{
    
}