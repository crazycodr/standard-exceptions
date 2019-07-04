<?php

declare(strict_types=1);

class HttpExceptionFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testBuildException()
    {
        $stu = new \Exceptions\Helpers\HttpExceptionFactory();

        $this->assertInstanceOf(\Exceptions\Http\Client\BadRequestException::class, $stu->build(400));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnauthorizedException::class, $stu->build(401));
        $this->assertInstanceOf(\Exceptions\Http\Client\PaymentRequiredException::class, $stu->build(402));
        $this->assertInstanceOf(\Exceptions\Http\Client\ForbiddenException::class, $stu->build(403));
        $this->assertInstanceOf(\Exceptions\Http\Client\NotFoundException::class, $stu->build(404));
        $this->assertInstanceOf(\Exceptions\Http\Client\MethodNotAllowedException::class, $stu->build(405));
        $this->assertInstanceOf(\Exceptions\Http\Client\NotAcceptableException::class, $stu->build(406));
        $this->assertInstanceOf(\Exceptions\Http\Client\ProxyAuthorizationRequiredException::class, $stu->build(407));
        $this->assertInstanceOf(\Exceptions\Http\Client\RequestTimeoutException::class, $stu->build(408));
        $this->assertInstanceOf(\Exceptions\Http\Client\ConflictException::class, $stu->build(409));
        $this->assertInstanceOf(\Exceptions\Http\Client\GoneException::class, $stu->build(410));
        $this->assertInstanceOf(\Exceptions\Http\Client\LengthRequiredException::class, $stu->build(411));
        $this->assertInstanceOf(\Exceptions\Http\Client\PreConditionRequiredException::class, $stu->build(412));
        $this->assertInstanceOf(\Exceptions\Http\Client\PayloadTooLargeException::class, $stu->build(413));
        $this->assertInstanceOf(\Exceptions\Http\Client\URITooLongException::class, $stu->build(414));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnsupportedMediaTypeException::class, $stu->build(415));
        $this->assertInstanceOf(\Exceptions\Http\Client\RangeNotSatisfiableException::class, $stu->build(416));
        $this->assertInstanceOf(\Exceptions\Http\Client\ExpectationFailedException::class, $stu->build(417));
        $this->assertInstanceOf(\Exceptions\Http\Client\ImATeapotException::class, $stu->build(418));
        $this->assertInstanceOf(\Exceptions\Http\Client\MisdirectedRequestException::class, $stu->build(421));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnprocessableEntityException::class, $stu->build(422));
        $this->assertInstanceOf(\Exceptions\Http\Client\LockedException::class, $stu->build(423));
        $this->assertInstanceOf(\Exceptions\Http\Client\FailedDependencyException::class, $stu->build(424));
        $this->assertInstanceOf(\Exceptions\Http\Client\UpgradeRequiredException::class, $stu->build(426));
        $this->assertInstanceOf(\Exceptions\Http\Client\PreConditionRequiredException::class, $stu->build(428));
        $this->assertInstanceOf(\Exceptions\Http\Client\TooManyRequestsException::class, $stu->build(429));
        $this->assertInstanceOf(\Exceptions\Http\Client\RequestHeaderFieldsTooLargeException::class, $stu->build(431));
        $this->assertInstanceOf(\Exceptions\Http\Client\UnavailableForLegalReasonsException::class, $stu->build(451));
        $this->assertInstanceOf(\Exceptions\Http\Server\InternalServerErrorException::class, $stu->build(500));
        $this->assertInstanceOf(\Exceptions\Http\Server\NotImplementedException::class, $stu->build(501));
        $this->assertInstanceOf(\Exceptions\Http\Server\BadGatewayException::class, $stu->build(502));
        $this->assertInstanceOf(\Exceptions\Http\Server\ServiceUnavailableException::class, $stu->build(503));
        $this->assertInstanceOf(\Exceptions\Http\Server\GatewayTimeoutException::class, $stu->build(504));
        $this->assertInstanceOf(\Exceptions\Http\Server\HttpVersionNotSupportedException::class, $stu->build(505));
        $this->assertInstanceOf(\Exceptions\Http\Server\InsuficientStorageException::class, $stu->build(507));
        $this->assertInstanceOf(\Exceptions\Http\Server\LoopDetectedException::class, $stu->build(508));


        $this->expectException(InvalidArgumentException::class);
        $stu->build(100);
    }
}
