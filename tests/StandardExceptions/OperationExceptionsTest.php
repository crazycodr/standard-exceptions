<?php

class OperationExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testBadFunctionCallException()
    {
        try {
            throw new \StandardExceptions\OperationExceptions\BadFunctionCallException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\OperationExceptions\BadFunctionCallException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testBadMethodCallException()
    {
        try {
            throw new \StandardExceptions\OperationExceptions\BadMethodCallException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\OperationExceptions\BadMethodCallException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidOperationException()
    {
        try {
            throw new \StandardExceptions\OperationExceptions\InvalidOperationException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\OperationExceptions\InvalidOperationException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotImplementedYetException()
    {
        try {
            throw new \StandardExceptions\OperationExceptions\NotImplementedYetException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\OperationExceptions\NotImplementedYetException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testOverflowException()
    {
        try {
            throw new \StandardExceptions\OperationExceptions\OverflowException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\OperationExceptions\OverflowException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnexpectedReturnValueException()
    {
        try {
            throw new \StandardExceptions\OperationExceptions\UnexpectedReturnValueException('Test message passed',
                92837, $previousException = new \Exception('test'));
        } catch (\StandardExceptions\OperationExceptions\UnexpectedReturnValueException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
