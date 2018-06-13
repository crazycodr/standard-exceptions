<?php

namespace Exceptions\Http\Client;

/**
 * This is the old version of the new PayloadTooLargeException. Consider throwing the newer one instead.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @deprecated 3.0 Use PayloadTooLargeException instead
 * @see PayloadTooLargeException
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestEntityTooLargeException extends PayloadTooLargeException
{
}
