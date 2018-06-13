<?php

namespace Exceptions\Http\Client;

/**
 * The request could not be completed because the server is not able to produce a response. For example, it doesn't
 * have the proper resources to handle the request. You should direct your request to another server.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class MisdirectedRequestException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 421;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Misdirected Request: The server cannot respond to this request due to a lack of resources or features. Please direct this request to the proper server instead.';
}
