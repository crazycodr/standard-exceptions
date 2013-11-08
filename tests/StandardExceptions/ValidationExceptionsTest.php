<?php
class ValidationExceptionsTest extends PHPUnit_Framework_TestCase
{

    public function testIncorrectLengthException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\IncorrectLengthException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\IncorrectLengthException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidBooleanException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidBooleanException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidBooleanException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidDateTimeException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidDateTimeException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidDateTimeException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidDateTimeFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidDateTimeFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidDateTimeFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidEmailFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidEmailFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidEmailFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidIPAddressFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidIPAddressFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidIPAddressFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidJSONFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidJSONFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidJSONFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidLengthException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidLengthException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidLengthException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidNumberException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidNumberException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidNumberException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidPostalCodeFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidPostalCodeFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidPostalCodeFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidRegexFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidRegexFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidRegexFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidStringException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidStringException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidStringException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidValueException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidValueException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidValueException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidXMLFormatException()
    {
        try
        {
            throw new \StandardExceptions\ValidationExceptions\InvalidXMLFormatException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\ValidationExceptions\InvalidXMLFormatException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

}