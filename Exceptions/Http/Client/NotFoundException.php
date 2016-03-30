<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\NotFoundException as NotFoundTag;

/**
 * The server has not found anything matching the Request-URI.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotFoundException extends ClientErrorException implements NotFoundTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 404;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Not found: The requested entity cannot be found, this may be returned because entity is not accessible using requested credentials, because of a recent state change or because entity cannot be found at all.';

    /**
     * NotFoundException constructor.
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
