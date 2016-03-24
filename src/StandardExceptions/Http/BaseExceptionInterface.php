<?php
namespace StandardExceptions\Http;

/**
 * This interface defines the different accessor you can use when dealing with HTTP exceptions.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
interface BaseExceptionInterface
{

    /**
     * Represents client errors
     */
    const CODE_CLASS_CLIENT_ERROR = 400;

    /**
     * Represents server errors
     */
    const CODE_CLASS_SERVER_ERROR = 500;

    /**
     * Returns the standard HTTP code class associated with this exception
     *
     * @return int
     */
    function getHttpCodeClass();

    /**
     * Returns the standard HTTP code associated with this exception
     *
     * @return int
     */
    function getHttpCode();

    /**
     * Returns the standard HTTP message associated with this exception
     *
     * @return string
     */
    function getHttpMessage();
}
