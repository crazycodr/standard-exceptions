<?php
namespace StandardExceptions\Http;

/**
 * All client error http exceptions extend this class and save you the trouble of setting up the method that returns
 * the error class code.
 */
abstract class ClientErrorException extends BaseErrorException implements ClientErrorExceptionInterface
{

    /**
     * @inheritdoc
     */
    function getHttpCodeClass()
    {

        return self::CODE_CLASS_CLIENT_ERROR;
    }
}
