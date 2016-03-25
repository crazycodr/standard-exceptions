<?php

class OperationExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testBadFunctionCallException()
    {
        try {
            throw new \Exceptions\OperationExceptions\BadFunctionCallException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\OperationExceptions\BadFunctionCallException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testBadMethodCallException()
    {
        try {
            throw new \Exceptions\OperationExceptions\BadMethodCallException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\OperationExceptions\BadMethodCallException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidOperationException()
    {
        try {
            throw new \Exceptions\OperationExceptions\InvalidOperationException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\OperationExceptions\InvalidOperationException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotImplementedYetException()
    {
        try {
            throw new \Exceptions\OperationExceptions\NotImplementedYetException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\OperationExceptions\NotImplementedYetException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testOverflowException()
    {
        try {
            throw new \Exceptions\OperationExceptions\OverflowException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\OperationExceptions\OverflowException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnexpectedReturnValueException()
    {
        try {
            throw new \Exceptions\OperationExceptions\UnexpectedReturnValueException('Test message passed',
                92837, $previousException = new \Exception('test'));
        } catch (\Exceptions\OperationExceptions\UnexpectedReturnValueException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
