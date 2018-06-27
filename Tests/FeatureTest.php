<?php

class FeatureTest extends \PHPUnit\Framework\TestCase
{
    
    /**
     * Tests that you can still properly override the message and code of an exception
     */
    public function testConstructorAllowsOverridingCodeAndMessage()
    {
        $previousException = new \Exception('test');
        /** @var \Exception $exception */
        $exception = new \Exceptions\Collection\EmptyException('Test message passed', 92837, $previousException);
        $this->assertEquals('Test message passed', $exception->getMessage());
        $this->assertEquals(92837, $exception->getCode());
        $this->assertSame($previousException, $exception->getPrevious());
    }
    
    /**
     * Tests that you can call get default message and get default code
     */
    public function testDefaults()
    {
        $this->assertNotEmpty(\Exceptions\Collection\EmptyException::getDefaultMessage());
        $this->assertNotNull(\Exceptions\Collection\EmptyException::getDefaultCode());
    }
    
    /**
     * Tests that on a new parameter less constructed exception, the message and code should match the defaults
     */
    public function testDefaultConstructor()
    {
        $exception = new \Exceptions\Collection\EmptyException();
        $this->assertEquals($exception->getMessage(), \Exceptions\Collection\EmptyException::getDefaultMessage());
        $this->assertEquals($exception->getCode(), \Exceptions\Collection\EmptyException::getDefaultCode());
    }
    
    /**
     * Tests that using from() will create a new exception with default message/code but still add the previous
     * exception passed in properly.
     */
    public function testFromException()
    {
        $previousException = new \Exception('test');
        /** @var \Exception $exception */
        $exception = \Exceptions\Collection\EmptyException::from($previousException);
        $this->assertEquals(\Exceptions\Collection\EmptyException::getDefaultMessage(), $exception->getMessage());
        $this->assertEquals(\Exceptions\Collection\EmptyException::getDefaultCode(), $exception->getCode());
        $this->assertSame($previousException, $exception->getPrevious());
    }
    
    /**
     * Tests that the getHttpCode and getHttpMessages can be called on Http exceptions
     */
    public function testHttpMethods()
    {
        $this->assertContains(\Exceptions\Http\Client\ForbiddenException::getHttpCodeClass(), [
            \Exceptions\Http\HttpExceptionInterface::CODE_CLASS_CLIENT_ERROR,
            \Exceptions\Http\HttpExceptionInterface::CODE_CLASS_SERVER_ERROR,
        ]);
        $this->assertClassIsSubclassOf(
            \Exceptions\Http\HttpExceptionInterface::class,
            \Exceptions\Http\Client\ForbiddenException::class
        );
        $this->assertInternalType('int', \Exceptions\Http\Client\ForbiddenException::getHttpCode());
        $this->assertGreaterThan(0, \Exceptions\Http\Client\ForbiddenException::getHttpCode());
        $this->assertInternalType('string', \Exceptions\Http\Client\ForbiddenException::getHttpMessage());
        $this->assertGreaterThan(0, strlen(\Exceptions\Http\Client\ForbiddenException::getHttpMessage()));
    }
    
    /**
     * Used to test that the $expected class is part of the $subject class anywhere in the class hierarchy
     *
     * @param string $expected Class to expect $subject to extend
     * @param string $subject  Class that should extend $expected
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
