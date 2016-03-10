<?php

class HTTPExceptionsTest extends PHPUnit_Framework_TestCase
{
    public function testBadRequestException()
    {
        try {
            throw new \StandardExceptions\HTTPExceptions\BadRequestException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\HTTPExceptions\BadRequestException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testForbiddenException()
    {
        try {
            throw new \StandardExceptions\HTTPExceptions\ForbiddenException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\HTTPExceptions\ForbiddenException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testMethodNotAllowedException()
    {
        try {
            throw new \StandardExceptions\HTTPExceptions\MethodNotAllowedException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\HTTPExceptions\MethodNotAllowedException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotAcceptableException()
    {
        try {
            throw new \StandardExceptions\HTTPExceptions\NotAcceptableException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\HTTPExceptions\NotAcceptableException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testNotFoundException()
    {
        try {
            throw new \StandardExceptions\HTTPExceptions\NotFoundException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\HTTPExceptions\NotFoundException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnauthorizedAccessException()
    {
        try {
            throw new \StandardExceptions\HTTPExceptions\UnauthorizedAccessException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\HTTPExceptions\UnauthorizedAccessException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }

    public function testUnprocessableEntityException()
    {
        try {
            throw new \StandardExceptions\HTTPExceptions\UnprocessableEntityException('Test message passed', 92837,
                $previousException = new \Exception('test'));
        } catch (\StandardExceptions\HTTPExceptions\UnprocessableEntityException $ex) {
            $this->assertEquals('Test message passed', $ex->getMessage());
            $this->assertEquals(92837, $ex->getCode());
            $this->assertEquals($previousException, $ex->getPrevious());
        }
    }
}
