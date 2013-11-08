<?php
class LogicExceptionsTest extends PHPUnit_Framework_TestCase
{

    public function testIllegalArgumentTypeException()
    {
        try
        {
            throw new \StandardExceptions\LogicExceptions\IllegalArgumentTypeException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\LogicExceptions\IllegalArgumentTypeException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testIllegalValueException()
    {
        try
        {
            throw new \StandardExceptions\LogicExceptions\IllegalValueException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\LogicExceptions\IllegalValueException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

}