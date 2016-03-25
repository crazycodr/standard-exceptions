<?php

class ArrayExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testArrayIsEmptyException()
    {
        try {
            throw new \Exceptions\Collection\ArrayIsEmptyException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\ArrayIsEmptyException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testArrayIsFullException()
    {
        try {
            throw new \Exceptions\Collection\ArrayIsFullException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\ArrayIsFullException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testArrayUnderflowException()
    {
        try {
            throw new \Exceptions\Collection\ArrayUnderflowException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\ArrayUnderflowException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testIndexNotFoundException()
    {
        try {
            throw new \Exceptions\Collection\IndexNotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\IndexNotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidKeyException()
    {
        try {
            throw new \Exceptions\Collection\InvalidKeyException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\InvalidKeyException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testKeyAlreadyExistsException()
    {
        try {
            throw new \Exceptions\Collection\KeyAlreadyExistsException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\KeyAlreadyExistsException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testKeyNotFoundException()
    {
        try {
            throw new \Exceptions\Collection\KeyNotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\KeyNotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testItemNotFoundException()
    {
        try {
            throw new \Exceptions\Collection\ItemNotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\ItemNotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testReadOnlyArrayException()
    {
        try {
            throw new \Exceptions\Collection\ReadOnlyArrayException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\ReadOnlyArrayException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testReadOnlyArrayItemException()
    {
        try {
            throw new \Exceptions\Collection\ReadOnlyArrayItemException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Collection\ReadOnlyArrayItemException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
