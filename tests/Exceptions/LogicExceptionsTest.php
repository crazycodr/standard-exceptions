<?php

class LogicExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testIllegalArgumentTypeException()
    {
        try {
            throw new \Exceptions\LogicExceptions\IllegalArgumentTypeException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\LogicExceptions\IllegalArgumentTypeException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testIllegalValueException()
    {
        try {
            throw new \Exceptions\LogicExceptions\IllegalValueException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\LogicExceptions\IllegalValueException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
