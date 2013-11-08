<?php
class IOExceptionsTest extends PHPUnit_Framework_TestCase
{

    public function testConnectionLostException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\ConnectionLostException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\ConnectionLostException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testConnectionRefusedException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\ConnectionRefusedException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\ConnectionRefusedException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testDirectoryNotFoundException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\DirectoryNotFoundException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\DirectoryNotFoundException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testDirectoryNotReadableException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\DirectoryNotReadableException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\DirectoryNotReadableException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testDirectoryNotWritableException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\DirectoryNotWritableException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\DirectoryNotWritableException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testFileNotFoundException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\FileNotFoundException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\FileNotFoundException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testFileNotReadableException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\FileNotReadableException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\FileNotReadableException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testFileNotWritableException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\FileNotWritableException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\FileNotWritableException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotADirectoryException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\NotADirectoryException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\NotADirectoryException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotAFileException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\NotAFileException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\NotAFileException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnexpectedResponseException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\UnexpectedResponseException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\UnexpectedResponseException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnknownHostException()
    {
        try
        {
            throw new \StandardExceptions\IOExceptions\UnknownHostException('Test message passed', 92837, $previousException = new \Exception('test'));
        }
        catch(\StandardExceptions\IOExceptions\UnknownHostException $ex)
        {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

}