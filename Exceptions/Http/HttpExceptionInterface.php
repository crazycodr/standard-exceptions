<?php

namespace Exceptions\Http;

/**
 * This interface defines the different accessor you can use when dealing with HTTP exceptions.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
interface HttpExceptionInterface
{
    /**
     * Represents client errors.
     */
    const CODE_CLASS_CLIENT_ERROR = 400;

    /**
     * Represents server errors.
     */
    const CODE_CLASS_SERVER_ERROR = 500;

    /**
     * Returns the standard HTTP code class associated with this exception.
     *
     * @return int
     */
    public static function getHttpCodeClass();

    /**
     * Returns the standard HTTP code associated with this exception.
     *
     * @return int
     */
    public static function getHttpCode();

    /**
     * Returns the standard HTTP message associated with this exception.
     *
     * @return string
     */
    public static function getHttpMessage();
}
