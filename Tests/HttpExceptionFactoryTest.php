<?php

declare(strict_types=1);

namespace Exceptions\Tests;

use Exception;
use Exceptions\Data\ValidationException;
use Exceptions\Http\Client;
use Exceptions\Http\Server;
use Exceptions\Helpers\HttpExceptionFactory;
use Exceptions\Tests\stub\CustomHttpException;
use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use stdClass;

class HttpExceptionFactoryTest extends TestCase
{
    /**
     * @param int $errorCode
     * @param string $expectedClass
     */
    #[DataProvider(methodName: 'dataProvider')]
    public function testBuild(int $errorCode, string $expectedClass)
    {
        $this->assertInstanceOf($expectedClass, HttpExceptionFactory::build($errorCode));
    }

    public function testBuildFailed()
    {
        $this->expectException(ValidationException::class);
        HttpExceptionFactory::build(101);
    }

    /**
     * @param int $errorCode
     * @param string $expectedClass
     */
    #[DataProvider(methodName: 'dataProvider')]
    public function testBuildWithContext(int $errorCode, string $expectedClass)
    {
        $ctx = new stdClass();
        $message = 'test';
        $previousException = new Exception();
        $exception = HttpExceptionFactory::buildWithContext($errorCode, $ctx, $message, $previousException);
        $this->assertInstanceOf($expectedClass, $exception);
        $this->assertSame($ctx, $exception->getContext());
        $this->assertSame('test', $exception->getMessage());
        $this->assertSame($previousException, $exception->getPrevious());
    }

    public function testBuildWithContextFailed()
    {
        $this->expectException(ValidationException::class);
        HttpExceptionFactory::buildWithContext(101, []);
    }

    public function testExtendingHelper()
    {
        $helper = new class () extends HttpExceptionFactory {
            protected static function getMapping(): array
            {
                return [
                    101 => CustomHttpException::class
                ];
            }
        };

        $exception = $helper::build(101);
        $this->assertInstanceOf(CustomHttpException::class, $exception);
    }

    public static function dataProvider(): Generator
    {
        yield 'Client\BadRequestException' => [
            'errorCode' => 400,
            'expectedClass' => Client\BadRequestException::class,
        ];

        yield 'Client\UnauthorizedException' => [
            'errorCode' => 401,
            'expectedClass' => Client\UnauthorizedException::class,
        ];

        yield 'Client\PaymentRequiredException' => [
            'errorCode' => 402,
            'expectedClass' => Client\PaymentRequiredException::class,
        ];

        yield 'Client\ForbiddenException' => [
            'errorCode' => 403,
            'expectedClass' => Client\ForbiddenException::class,
        ];

        yield 'Client\NotFoundException' => [
            'errorCode' => 404,
            'expectedClass' => Client\NotFoundException::class,
        ];

        yield 'Client\MethodNotAllowedException' => [
            'errorCode' => 405,
            'expectedClass' => Client\MethodNotAllowedException::class,
        ];

        yield 'Client\NotAcceptableException' => [
            'errorCode' => 406,
            'expectedClass' => Client\NotAcceptableException::class,
        ];

        yield 'Client\ProxyAuthorizationRequiredException' => [
            'errorCode' => 407,
            'expectedClass' => Client\ProxyAuthorizationRequiredException::class,
        ];

        yield 'Client\RequestTimeoutException' => [
            'errorCode' => 408,
            'expectedClass' => Client\RequestTimeoutException::class,
        ];

        yield 'Client\ConflictException' => [
            'errorCode' => 409,
            'expectedClass' => Client\ConflictException::class,
        ];

        yield 'Client\GoneException' => [
            'errorCode' => 410,
            'expectedClass' => Client\GoneException::class,
        ];

        yield 'Client\LengthRequiredException' => [
            'errorCode' => 411,
            'expectedClass' => Client\LengthRequiredException::class,
        ];

        yield 'Client\PreConditionRequiredException' => [
            'errorCode' => 412,
            'expectedClass' => Client\PreConditionRequiredException::class,
        ];

        yield 'Client\PayloadTooLargeException' => [
            'errorCode' => 413,
            'expectedClass' => Client\PayloadTooLargeException::class,
        ];

        yield 'Client\URITooLongException' => [
            'errorCode' => 414,
            'expectedClass' => Client\URITooLongException::class,
        ];

        yield 'Client\UnsupportedMediaTypeException' => [
            'errorCode' => 415,
            'expectedClass' => Client\UnsupportedMediaTypeException::class,
        ];

        yield 'Client\RangeNotSatisfiableException' => [
            'errorCode' => 416,
            'expectedClass' => Client\RangeNotSatisfiableException::class,
        ];

        yield 'Client\ExpectationFailedException' => [
            'errorCode' => 417,
            'expectedClass' => Client\ExpectationFailedException::class,
        ];

        yield 'Client\MisdirectedRequestException' => [
            'errorCode' => 421,
            'expectedClass' => Client\MisdirectedRequestException::class,
        ];

        yield 'Client\UnprocessableEntityException' => [
            'errorCode' => 422,
            'expectedClass' => Client\UnprocessableEntityException::class,
        ];

        yield 'Client\LockedException' => [
            'errorCode' => 423,
            'expectedClass' => Client\LockedException::class,
        ];

        yield 'Client\FailedDependencyException' => [
            'errorCode' => 424,
            'expectedClass' => Client\FailedDependencyException::class,
        ];

        yield 'Client\UpgradeRequiredException' => [
            'errorCode' => 426,
            'expectedClass' => Client\UpgradeRequiredException::class,
        ];

        yield 'Client\PreConditionRequiredException' => [
            'errorCode' => 428,
            'expectedClass' => Client\PreConditionRequiredException::class,
        ];

        yield 'Client\TooManyRequestsException' => [
            'errorCode' => 429,
            'expectedClass' => Client\TooManyRequestsException::class,
        ];

        yield 'Client\RequestHeaderFieldsTooLargeException' => [
            'errorCode' => 431,
            'expectedClass' => Client\RequestHeaderFieldsTooLargeException::class,
        ];

        yield 'Client\UnavailableForLegalReasonsException' => [
            'errorCode' => 451,
            'expectedClass' => Client\UnavailableForLegalReasonsException::class,
        ];

        yield 'Client\UnrecoverableErrorException' => [
            'errorCode' => 456,
            'expectedClass' => Client\UnrecoverableErrorException::class,
        ];

        yield 'Server\InternalServerErrorException' => [
            'errorCode' => 500,
            'expectedClass' => Server\InternalServerErrorException::class,
        ];

        yield 'Server\NotImplementedException' => [
            'errorCode' => 501,
            'expectedClass' => Server\NotImplementedException::class,
        ];

        yield 'Server\BadGatewayException' => [
            'errorCode' => 502,
            'expectedClass' => Server\BadGatewayException::class,
        ];

        yield 'Server\ServiceUnavailableException' => [
            'errorCode' => 503,
            'expectedClass' => Server\ServiceUnavailableException::class,
        ];

        yield 'Server\GatewayTimeoutException' => [
            'errorCode' => 504,
            'expectedClass' => Server\GatewayTimeoutException::class,
        ];

        yield 'Server\HttpVersionNotSupportedException' => [
            'errorCode' => 505,
            'expectedClass' => Server\HttpVersionNotSupportedException::class,
        ];

        yield 'Server\InsufficientStorageException' => [
            'errorCode' => 507,
            'expectedClass' => Server\InsufficientStorageException::class,
        ];

        yield 'Server\LoopDetectedException' => [
            'errorCode' => 508,
            'expectedClass' => Server\LoopDetectedException::class,
        ];
    }
}
