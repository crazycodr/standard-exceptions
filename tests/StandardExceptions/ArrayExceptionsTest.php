<?php
class ArrayExceptionsTest extends PHPUnit_Framework_TestCase
{

    public function testArrayIsEmptyException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\ArrayIsEmptyException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\ArrayIsEmptyException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testArrayIsFullException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\ArrayIsFullException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\ArrayIsFullException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testArrayUnderflowException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\ArrayUnderflowException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\ArrayUnderflowException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testIndexNotFoundException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\IndexNotFoundException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\IndexNotFoundException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidKeyException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\InvalidKeyException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\InvalidKeyException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testKeyAlreadyExistsException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\KeyAlreadyExistsException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\KeyAlreadyExistsException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testKeyNotFoundException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\KeyNotFoundException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\KeyNotFoundException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testItemNotFoundException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\ItemNotFoundException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\ItemNotFoundException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testReadOnlyArrayException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\ReadOnlyArrayException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\ReadOnlyArrayException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testReadOnlyArrayItemException()
    {
        try
        {
            throw new \StandardExceptions\ArrayExceptions\ReadOnlyArrayItemException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ArrayExceptions\ReadOnlyArrayItemException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

}