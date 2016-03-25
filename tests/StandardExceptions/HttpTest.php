<?php

class HTTPExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testBadRequestException()
    {
        try {
            throw new \Exceptions\Http\BadRequestException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Http\BadRequestException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testForbiddenException()
    {
        try {
            throw new \Exceptions\Http\ForbiddenException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Http\ForbiddenException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testMethodNotAllowedException()
    {
        try {
            throw new \Exceptions\Http\MethodNotAllowedException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Http\MethodNotAllowedException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotAcceptableException()
    {
        try {
            throw new \Exceptions\Http\NotAcceptableException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Http\NotAcceptableException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotFoundException()
    {
        try {
            throw new \Exceptions\Http\NotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Http\NotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnauthorizedAccessException()
    {
        try {
            throw new \Exceptions\Http\UnauthorizedException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Http\UnauthorizedException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnprocessableEntityException()
    {
        try {
            throw new \Exceptions\Http\UnprocessableEntityException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\Exceptions\Http\UnprocessableEntityException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
