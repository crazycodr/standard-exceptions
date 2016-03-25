<?php

class IOExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testConnectionLostException()
    {
        try {
            throw new \Exceptions\IO\ConnectionLostException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\ConnectionLostException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testConnectionRefusedException()
    {
        try {
            throw new \Exceptions\IO\ConnectionRefusedException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\ConnectionRefusedException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testDirectoryNotFoundException()
    {
        try {
            throw new \Exceptions\IO\DirectoryNotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\DirectoryNotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testDirectoryNotReadableException()
    {
        try {
            throw new \Exceptions\IO\DirectoryNotReadableException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\DirectoryNotReadableException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testDirectoryNotWritableException()
    {
        try {
            throw new \Exceptions\IO\DirectoryNotWritableException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\DirectoryNotWritableException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testFileNotFoundException()
    {
        try {
            throw new \Exceptions\IO\FileNotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\FileNotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testFileNotReadableException()
    {
        try {
            throw new \Exceptions\IO\FileNotReadableException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\FileNotReadableException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testFileNotWritableException()
    {
        try {
            throw new \Exceptions\IO\FileNotWritableException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\FileNotWritableException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotADirectoryException()
    {
        try {
            throw new \Exceptions\IO\NotADirectoryException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\NotADirectoryException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotAFileException()
    {
        try {
            throw new \Exceptions\IO\NotAFileException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\NotAFileException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnexpectedResponseException()
    {
        try {
            throw new \Exceptions\IO\UnexpectedResponseException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\UnexpectedResponseException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnknownHostException()
    {
        try {
            throw new \Exceptions\IO\UnknownHostException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\IO\UnknownHostException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
