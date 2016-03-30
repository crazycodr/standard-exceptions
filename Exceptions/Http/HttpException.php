<?php

namespace Exceptions\Http;

/**
 * This is a tag like class that is used to regroup all Http exceptions under a single base class.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class HttpException extends \RuntimeException implements HttpExceptionInterface
{
}
