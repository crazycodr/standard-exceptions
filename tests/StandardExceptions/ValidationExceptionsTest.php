<?php

class ValidationExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testIncorrectLengthException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\IncorrectLengthException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\IncorrectLengthException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidBooleanException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidBooleanException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidBooleanException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidDateTimeException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidDateTimeException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidDateTimeException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidDateTimeFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidDateTimeFormatException('Test message passed',
                92837, $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidDateTimeFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidEmailFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidEmailFormatException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidEmailFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidFormatException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidIPAddressFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidIPAddressFormatException('Test message passed',
                92837, $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidIPAddressFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidJSONFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidJSONFormatException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidJSONFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidLengthException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidLengthException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidLengthException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidNumberException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidNumberException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidNumberException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidPostalCodeFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidPostalCodeFormatException('Test message passed',
                92837, $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidPostalCodeFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidRegexFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidRegexFormatException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidRegexFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidStringException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidStringException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidStringException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidValueException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidValueException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidValueException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testInvalidXMLFormatException()
    {
        try {
            throw new \Exceptions\ValidationExceptions\InvalidXMLFormatException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\ValidationExceptions\InvalidXMLFormatException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
