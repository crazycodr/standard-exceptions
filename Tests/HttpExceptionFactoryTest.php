<?php

declare(strict_types=1);

class HttpExceptionFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testBuildException()
    {
        $stu = new \Exceptions\Helpers\HttpExceptionFactory();

        $this->assertInstanceOf(\Exceptions\Http\Client\BadRequestException::class, $stu->buildException(400));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnauthorizedException::class, $stu->buildException(401));
        $this->assertInstanceOf(\Exceptions\Http\Client\PaymentRequiredException::class, $stu->buildException(402));
        $this->assertInstanceOf(\Exceptions\Http\Client\ForbiddenException::class, $stu->buildException(403));
        $this->assertInstanceOf(\Exceptions\Http\Client\NotFoundException::class, $stu->buildException(404));
        $this->assertInstanceOf(\Exceptions\Http\Client\MethodNotAllowedException::class, $stu->buildException(405));
        $this->assertInstanceOf(\Exceptions\Http\Client\NotAcceptableException::class, $stu->buildException(406));
        $this->assertInstanceOf(\Exceptions\Http\Client\ProxyAuthorizationRequiredException::class, $stu->buildException(407));
        $this->assertInstanceOf(\Exceptions\Http\Client\RequestTimeoutException::class, $stu->buildException(408));
        $this->assertInstanceOf(\Exceptions\Http\Client\ConflictException::class, $stu->buildException(409));
        $this->assertInstanceOf(\Exceptions\Http\Client\GoneException::class, $stu->buildException(410));
        $this->assertInstanceOf(\Exceptions\Http\Client\LengthRequiredException::class, $stu->buildException(411));
        $this->assertInstanceOf(\Exceptions\Http\Client\PreConditionRequiredException::class, $stu->buildException(412));
        $this->assertInstanceOf(\Exceptions\Http\Client\PayloadTooLargeException::class, $stu->buildException(413));
        $this->assertInstanceOf(\Exceptions\Http\Client\URITooLongException::class, $stu->buildException(414));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnsupportedMediaTypeException::class, $stu->buildException(415));
        $this->assertInstanceOf(\Exceptions\Http\Client\RangeNotSatisfiableException::class, $stu->buildException(416));
        $this->assertInstanceOf(\Exceptions\Http\Client\ExpectationFailedException::class, $stu->buildException(417));
        $this->assertInstanceOf(\Exceptions\Http\Client\ImATeapotException::class, $stu->buildException(418));
        $this->assertInstanceOf(\Exceptions\Http\Client\MisdirectedRequestException::class, $stu->buildException(421));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnprocessableEntityException::class, $stu->buildException(422));
        $this->assertInstanceOf(\Exceptions\Http\Client\LockedException::class, $stu->buildException(423));
        $this->assertInstanceOf(\Exceptions\Http\Client\FailedDependencyException::class, $stu->buildException(424));
        $this->assertInstanceOf(\Exceptions\Http\Client\UpgradeRequiredException::class, $stu->buildException(426));
        $this->assertInstanceOf(\Exceptions\Http\Client\PreConditionRequiredException::class, $stu->buildException(428));
        $this->assertInstanceOf(\Exceptions\Http\Client\TooManyRequestsException::class, $stu->buildException(429));
        $this->assertInstanceOf(\Exceptions\Http\Client\RequestHeaderFieldsTooLargeException::class, $stu->buildException(431));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnavailableForLegalReasonsException::class, $stu->buildException(451));
        $this->assertInstanceOf(\Exceptions\Http\Server\InternalServerErrorException::class, $stu->buildException(500));
        $this->assertInstanceOf(\Exceptions\Http\Server\NotImplementedException::class, $stu->buildException(501));
        $this->assertInstanceOf(\Exceptions\Http\Server\BadGatewayException::class, $stu->buildException(502));
        $this->assertInstanceOf(\Exceptions\Http\Server\ServiceUnavailableException::class, $stu->buildException(503));
        $this->assertInstanceOf(\Exceptions\Http\Server\GatewayTimeoutException::class, $stu->buildException(504));
        $this->assertInstanceOf(\Exceptions\Http\Server\HttpVersionNotSupportedException::class, $stu->buildException(505));
        $this->assertInstanceOf(\Exceptions\Http\Server\InsuficientStorageException::class, $stu->buildException(507));
        $this->assertInstanceOf(\Exceptions\Http\Server\LoopDetectedException::class, $stu->buildException(508));


        $this->expectException(InvalidArgumentException::class);
        $stu->buildException(100);
    }
}
