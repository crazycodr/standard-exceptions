<?php

namespace Exceptions\Helpers;

use Exceptions\Data\ValidationException;
use Exceptions\Http\Client;
use Exceptions\Http\HttpExceptionInterface;
use Exceptions\Http\Server;
use Throwable;

class HttpExceptionFactory
{
    protected static array $mapping = [
        400 => Client\BadRequestException::class,
        401 => Client\UnauthorizedException::class,
        402 => Client\PaymentRequiredException::class,
        403 => Client\ForbiddenException::class,
        404 => Client\NotFoundException::class,
        405 => Client\MethodNotAllowedException::class,
        406 => Client\NotAcceptableException::class,
        407 => Client\ProxyAuthorizationRequiredException::class,
        408 => Client\RequestTimeoutException::class,
        409 => Client\ConflictException::class,
        410 => Client\GoneException::class,
        411 => Client\LengthRequiredException::class,
        412 => Client\PreConditionRequiredException::class,
        413 => Client\PayloadTooLargeException::class,
        414 => Client\URITooLongException::class,
        415 => Client\UnsupportedMediaTypeException::class,
        416 => Client\RangeNotSatisfiableException::class,
        417 => Client\ExpectationFailedException::class,
        421 => Client\MisdirectedRequestException::class,
        422 => Client\UnprocessableEntityException::class,
        423 => Client\LockedException::class,
        424 => Client\FailedDependencyException::class,
        426 => Client\UpgradeRequiredException::class,
        428 => Client\PreConditionRequiredException::class,
        429 => Client\TooManyRequestsException::class,
        431 => Client\RequestHeaderFieldsTooLargeException::class,
        451 => Client\UnavailableForLegalReasonsException::class,
        456 => Client\UnrecoverableErrorException::class,
        500 => Server\InternalServerErrorException::class,
        501 => Server\NotImplementedException::class,
        502 => Server\BadGatewayException::class,
        503 => Server\ServiceUnavailableException::class,
        504 => Server\GatewayTimeoutException::class,
        505 => Server\HttpVersionNotSupportedException::class,
        507 => Server\InsufficientStorageException::class,
        508 => Server\LoopDetectedException::class,
    ];

    /**
     * @param int $responseCode
     * @param string $message
     * @param Throwable|null $ex
     * @return HttpExceptionInterface
     *
     */
    public static function build(int $responseCode, string $message = '', Throwable $ex = null): HttpExceptionInterface
    {
        $mapping = static::getMapping();
        if (!array_key_exists($responseCode, $mapping)) {
            throw new ValidationException('Unknown mapping for response code ' . $responseCode);
        }

        return new $mapping[$responseCode]($message, $responseCode, $ex);
    }

    /**
     * @param int $responseCode
     * @param mixed $context mixed data you can attach to the exception
     * @param string $message
     * @param Throwable|null $ex [optional] The previous throwable used for the exception chaining.
     * @return HttpExceptionInterface
     *
     */
    public static function buildWithContext(int $responseCode, mixed $context, string $message = '', Throwable $ex = null): HttpExceptionInterface
    {
        $mapping = static::getMapping();
        if (!array_key_exists($responseCode, $mapping)) {
            throw new ValidationException('Unknown mapping for response code ' . $responseCode);
        }

        return $mapping[$responseCode]::withContext($context, $message, $responseCode, $ex);
    }

    /**
     * @return array Map between an Error code (as key) and a Class name (as value)
     */
    protected static function getMapping(): array
    {
        return static::$mapping;
    }
}
