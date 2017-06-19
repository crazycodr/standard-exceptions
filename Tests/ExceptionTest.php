<?php

class ExceptionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return string[]
     */
    public function providesConstructorTestClasses()
    {
        return [
            [\Exceptions\Collection\EmptyException::class],
            [\Exceptions\Collection\FullException::class],
            [\Exceptions\Collection\KeyAlreadyExistsException::class],
            [\Exceptions\Collection\KeyNotFoundException::class],
            [\Exceptions\Collection\ReadOnlyArrayException::class],
            [\Exceptions\Collection\ReadOnlyArrayItemException::class],
            [\Exceptions\Data\FormatException::class],
            [\Exceptions\Data\IntegrityException::class],
            [\Exceptions\Data\NotFoundException::class],
            [\Exceptions\Data\FoundTooManyException::class],
            [\Exceptions\Data\TypeException::class],
            [\Exceptions\Data\ValidationException::class],
            [\Exceptions\Http\Client\BadRequestException::class],
            [\Exceptions\Http\Client\ConflictException::class],
            [\Exceptions\Http\Client\MethodNotAllowedException::class],
            [\Exceptions\Http\Client\ForbiddenException::class],
            [\Exceptions\Http\Client\UnauthorizedException::class],
            [\Exceptions\Http\Client\NotAcceptableException::class],
            [\Exceptions\Http\Client\RequestEntityTooLargeException::class],
            [\Exceptions\Http\Client\RequestedRangeNotSatisfiableException::class],
            [\Exceptions\Http\Client\NotFoundException::class],
            [\Exceptions\Http\Client\UnprocessableEntityException::class],
            [\Exceptions\Http\Client\UnsupportedMediaTypeException::class],
            [\Exceptions\Http\Server\InternalServerErrorException::class],
            [\Exceptions\Http\Server\NotImplementedException::class],
            [\Exceptions\Http\Server\ServiceUnavailableException::class],
            [\Exceptions\IO\Filesystem\FileNotWritableException::class],
            [\Exceptions\IO\Filesystem\FileAlreadyExistsException::class],
            [\Exceptions\IO\Filesystem\NotAFileException::class],
            [\Exceptions\IO\Filesystem\NotADirectoryException::class],
            [\Exceptions\IO\Filesystem\FileNotFoundException::class],
            [\Exceptions\IO\Filesystem\DirectoryNotWritableException::class],
            [\Exceptions\IO\Filesystem\DirectoryAlreadyExistsException::class],
            [\Exceptions\IO\Filesystem\DirectoryNotFoundException::class],
            [\Exceptions\IO\Filesystem\FileNotReadableException::class],
            [\Exceptions\IO\Filesystem\DirectoryNotReadableException::class],
            [\Exceptions\IO\Network\ConnectionLostException::class],
            [\Exceptions\IO\Network\ConnectionRefusedException::class],
            [\Exceptions\IO\Network\UnexpectedResponseException::class],
            [\Exceptions\IO\Network\UnknownHostException::class],
            [\Exceptions\Operation\InvalidOperationException::class],
            [\Exceptions\Operation\NotImplementedException::class],
            [\Exceptions\Operation\UnexpectedException::class],
            [\Exceptions\Operation\AuthorizationException::class],
            [\Exceptions\Operation\ForbiddenException::class],
        ];
    }

    /**
     * @dataProvider providesConstructorTestClasses
     *
     * @param string $className Class to test constructor acts like standard exception
     */
    public function testConstructor($className)
    {
        $previousException = new \Exception('test');
        /** @var \Exception $exception */
        $exception = new $className('Test message passed', 92837, $previousException);
        $this->assertEquals('Test message passed', $exception->getMessage());
        $this->assertEquals(92837, $exception->getCode());
        $this->assertSame($previousException, $exception->getPrevious());
    }

    /**
     * @return string[]
     */
    public function providesHttpTestClasses()
    {
        return [
            [\Exceptions\Http\Client\BadRequestException::class],
            [\Exceptions\Http\Client\ConflictException::class],
            [\Exceptions\Http\Client\MethodNotAllowedException::class],
            [\Exceptions\Http\Client\ForbiddenException::class],
            [\Exceptions\Http\Client\UnauthorizedException::class],
            [\Exceptions\Http\Client\NotAcceptableException::class],
            [\Exceptions\Http\Client\RequestEntityTooLargeException::class],
            [\Exceptions\Http\Client\RequestedRangeNotSatisfiableException::class],
            [\Exceptions\Http\Client\NotFoundException::class],
            [\Exceptions\Http\Client\UnprocessableEntityException::class],
            [\Exceptions\Http\Client\UnsupportedMediaTypeException::class],
            [\Exceptions\Http\Server\InternalServerErrorException::class],
            [\Exceptions\Http\Server\NotImplementedException::class],
            [\Exceptions\Http\Server\ServiceUnavailableException::class],
        ];
    }

    /**
     * @dataProvider providesHttpTestClasses
     *
     * @param string $className Class to test http methods exist
     */
    public function testHttpMethods($className)
    {
        $this->assertContains($className::getHttpCodeClass(), [
            \Exceptions\Http\HttpExceptionInterface::CODE_CLASS_CLIENT_ERROR,
            \Exceptions\Http\HttpExceptionInterface::CODE_CLASS_SERVER_ERROR,
        ]);
        $this->assertClassIsSubclassOf(\Exceptions\Http\HttpExceptionInterface::class, $className);
        $this->assertInternalType('int', $className::getHttpCode());
        $this->assertGreaterThan(0, $className::getHttpCode());
        $this->assertInternalType('string', $className::getHttpMessage());
        $this->assertGreaterThan(0, strlen($className::getHttpMessage()));
    }

    /**
     * @param string $expected Class to expect $subject to extend
     * @param string $subject  Class that should extend $expected
     */
    public function assertClassIsSubclassOf($expected, $subject)
    {
        $checkReflection = new ReflectionClass($subject);
        $expectedReflection = new ReflectionClass($expected);
        $checkReflection->isSubclassOf($expectedReflection);
    }
}
