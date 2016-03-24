<?php
namespace StandardExceptions\Http;

/**
 * The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request
 * without modifications.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class BaseErrorException extends \RuntimeException implements BaseExceptionInterface
{
}
