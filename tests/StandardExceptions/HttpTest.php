<?php

class HTTPExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testBadRequestException()
    {
        try {
            throw new \StandardExceptions\Http\BadRequestException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\Http\BadRequestException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testForbiddenException()
    {
        try {
            throw new \StandardExceptions\Http\ForbiddenException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\Http\ForbiddenException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testMethodNotAllowedException()
    {
        try {
            throw new \StandardExceptions\Http\MethodNotAllowedException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\Http\MethodNotAllowedException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotAcceptableException()
    {
        try {
            throw new \StandardExceptions\Http\NotAcceptableException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\Http\NotAcceptableException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotFoundException()
    {
        try {
            throw new \StandardExceptions\Http\NotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\Http\NotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnauthorizedAccessException()
    {
        try {
            throw new \StandardExceptions\Http\UnauthorizedException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\Http\UnauthorizedException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnprocessableEntityException()
    {
        try {
            throw new \StandardExceptions\Http\UnprocessableEntityException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\Http\UnprocessableEntityException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
