<?php

namespace Exceptions\Tests;

use Exceptions\Collection;
use Exceptions\Http;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;

class FeatureTest extends TestCase
{

    /**
     * Tests that you can still properly override the message and code of an exception
     */
    public function testConstructorAllowsOverridingCodeAndMessage()
    {
        $previousException = new \Exception('test');
        /** @var \Exception $exception */
        $exception = new Collection\EmptyException('Test message passed', 92837, $previousException);
        $this->assertEquals('Test message passed', $exception->getMessage());
        $this->assertEquals(92837, $exception->getCode());
        $this->assertSame($previousException, $exception->getPrevious());
    }

    /**
     * Tests that you can call get default message and get default code
     */
    public function testDefaults()
    {
        $this->assertNotEmpty(Collection\EmptyException::getDefaultMessage());
        $this->assertNotNull(Collection\EmptyException::getDefaultCode());
    }

    /**
     * Tests that on a new parameter less constructed exception, the message and code should match the defaults
     */
    public function testDefaultConstructor()
    {
        $exception = new Collection\EmptyException();
        $this->assertEquals($exception->getMessage(), Collection\EmptyException::getDefaultMessage());
        $this->assertEquals($exception->getCode(), Collection\EmptyException::getDefaultCode());
    }

    /**
     * Tests that using from() will create a new exception with default message/code but still add the previous
     * exception passed in properly.
     */
    public function testFromException()
    {
        $previousException = new \Exception('test');
        /** @var \Exception $exception */
        $exception = Collection\EmptyException::from($previousException);
        $this->assertEquals(Collection\EmptyException::getDefaultMessage(), $exception->getMessage());
        $this->assertEquals(Collection\EmptyException::getDefaultCode(), $exception->getCode());
        $this->assertSame($previousException, $exception->getPrevious());
    }

    /**
     * Tests that using withContext() will create a new exception with default message/code and add context data
     * to the exception and allow the retrieval of it.
     */
    public function testWithContextException()
    {
        /** @var \Exception $exception */
        $exception = Collection\EmptyException::withContext([
            'key1' => 'data1',
        ]);
        $this->assertEquals(Collection\EmptyException::getDefaultMessage(), $exception->getMessage());
        $this->assertEquals(Collection\EmptyException::getDefaultCode(), $exception->getCode());
        $this->assertEquals([
            'key1' => 'data1',
        ], $exception->getContext());
    }

    /**
     * Tests that the getHttpCode and getHttpMessages can be called on Http exceptions
     */
    public function testHttpMethods()
    {
        $this->assertContains(Http\Client\ForbiddenException::getHttpCodeClass(), [
            Http\HttpExceptionInterface::CODE_CLASS_CLIENT_ERROR,
            Http\HttpExceptionInterface::CODE_CLASS_SERVER_ERROR,
        ]);
        $this->assertClassIsSubclassOf(
            Http\HttpExceptionInterface::class,
            Http\Client\ForbiddenException::class
        );
        $this->assertInternalType('int', Http\Client\ForbiddenException::getHttpCode());
        $this->assertGreaterThan(0, Http\Client\ForbiddenException::getHttpCode());
        $this->assertInternalType('string', Http\Client\ForbiddenException::getHttpMessage());
        $this->assertGreaterThan(0, strlen(Http\Client\ForbiddenException::getHttpMessage()));
    }

    /**
     * Used to test that the $expected class is part of the $subject class anywhere in the class hierarchy
     *
     * @param string $expected Class to expect $subject to extend
     * @param string $subject Class that should extend $expected
     *
     * @throws ReflectionException
     */
    public function assertClassIsSubclassOf(string $expected, string $subject)
    {
        $checkReflection = new ReflectionClass($subject);
        $expectedReflection = new ReflectionClass($expected);
        $this->assertTrue(
            $checkReflection->isSubclassOf($expectedReflection),
            $subject . ' is not a subclass of ' . $expected
        );
    }
}
