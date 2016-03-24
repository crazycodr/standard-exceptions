<?php
namespace StandardExceptions\Http;

/**
 * All server error http exceptions extend this class and save you the trouble of setting up the method that returns
 * the error class code.
 */
abstract class ServerErrorException extends BaseErrorException implements ServerErrorExceptionInterface
{

    /**
     * @inheritdoc
     */
    function getHttpCodeClass()
    {

        return self::CODE_CLASS_SERVER_ERROR;
    }
}
