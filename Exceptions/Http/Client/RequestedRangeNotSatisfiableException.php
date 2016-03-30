<?php

namespace Exceptions\Http\Client;

/**
 * Server cannot return a response because the range-specifier values do not overlap the current extent of the selected resource, and the request did not include an If-Range request-header field.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RequestedRangeNotSatisfiableException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 416;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Requested Range Not Satisfiable: Server cannot return a response because the range-specifier values do not overlap the current extent of the selected resource, and the request did not include an If-Range request-header field.';

    /**
     * RequestedRangeNotSatisfiableException constructor.
     *
     * @param string $message  Error message (HTTP) that defines this exception
     * @param int    $code     Error code (HTTP) that defines this exception
     * @param null   $previous Inner/Previous exception that triggered this exception
     */
    public function __construct(
        $message = self::HTTP_MESSAGE,
        $code = self::HTTP_CODE,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * {@inheritdoc}
     */
    public static function getHttpCode()
    {
        return self::HTTP_CODE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getHttpMessage()
    {
        return self::HTTP_MESSAGE;
    }
}
