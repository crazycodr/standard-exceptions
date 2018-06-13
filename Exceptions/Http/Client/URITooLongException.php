<?php

namespace Exceptions\Http\Client;

/**
 * The server will not provide a response because the request URI you send was too long and might be missing important
 * information. Instead the server refuses the server it in case he might misunderstand it.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class URITooLongException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 414;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'URI Too Long: The server is refusing to process a request because the requested URI was too long and response might not be accurate.';
}
