<?php

namespace Exceptions\Http\Client;

/**
 * The request was received but the server refused to fulfill it because it doesn't use the latest communication
 * protocol. This should be used when you are expecting a certain request structure that is now out of date and the
 * system should switch to a new protocol. This can be at the software level or at the OS/Hardware level. The best
 * example for this is to switch to TLS/1.0 instead of the old SSL protocols.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UpgradeRequiredException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 426;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Upgrade Required: The request cannot be completed because the request was made using an outdated technology or an outdated message structure.';
}
