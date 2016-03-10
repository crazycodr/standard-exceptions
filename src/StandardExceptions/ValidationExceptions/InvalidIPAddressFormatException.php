<?php

namespace StandardExceptions\ValidationExceptions;

/**
 * Use this exception when the string being passed on to your function detects that the IP address being passed on
 * is of incorrect format.
 *
 * Refrain from using this exception as a signal for invalid IP addresses based on validation algorithms or external
 * ping checks. If an IP is invalid due to the fact that the distant server doesn't respond or  if the ping tells you
 * that the server is down or doesn't exist then use an InvalidOperationException instead.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidIPAddressFormatException extends InvalidFormatException
{
    public function __construct($message = 'IP Address could not be parsed', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
