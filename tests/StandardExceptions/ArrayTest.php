<?php
class ArrayTest extends PHPUnit_Framework_TestCase
{

    public function testArrayIsEmptyException()
    {
    	try
    	{
    		throw new \StandardExceptions\Array\ArrayIsEmptyException('Test message passed', 92837, $previousException = new \Exception('test'));
    	}
    	catch(\StandardExceptions\Array\ArrayIsEmptyException $ex)
    	{
    		$this->assertEquals('Test message passed', $ex->getMessage());
    		$this->assertEquals(92837, $ex->getCode());
    		$this->assertEquals($previousException, $ex->getPrevious());
    	}
    }

}