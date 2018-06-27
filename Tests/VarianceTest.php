<?php

class VarianceTest extends \PHPUnit\Framework\TestCase
{
    
    /**
     * Tests that the use of the replaced interface tags can still be used to catch the exceptions that are now
     * getting thrown with the more recent tags that they extend from.
     */
    public function testCovarianceReplacedTagCatching()
    {
        
        // Ensure NotFoundException is still catchable by old NotFoundException tag and new NotFoundTag
        try {
            throw new \Exceptions\Data\NotFoundException();
        } catch (\Exceptions\Tag\NotFoundException $ex) {
            $this->assertTrue(true);
        }
        
        try {
            throw new \Exceptions\Data\NotFoundException();
        } catch (\Exceptions\Tag\NotFoundTag $ex) {
            $this->assertTrue(true);
        }
        
        // Ensure NotImplementedException is still catchable by old OperationAbortedException tag and new AbortedTag
        try {
            throw new \Exceptions\Operation\NotImplementedException();
        } catch (\Exceptions\Tag\OperationAbortedException $ex) {
            $this->assertTrue(true);
        }
        
        try {
            throw new \Exceptions\Operation\NotImplementedException();
        } catch (\Exceptions\Tag\AbortedTag $ex) {
            $this->assertTrue(true);
        }
        
        // Ensure KeyAlreadyExistsException is still catchable by old AlreadyExistsException tag and new ExistsTag
        try {
            throw new \Exceptions\Collection\KeyAlreadyExistsException();
        } catch (\Exceptions\Tag\AlreadyExistsException $ex) {
            $this->assertTrue(true);
        }
        
        try {
            throw new \Exceptions\Collection\KeyAlreadyExistsException();
        } catch (\Exceptions\Tag\ExistsTag $ex) {
            $this->assertTrue(true);
        }
        
        // Ensure IntegrityException is still catchable by old InvalidDataException tag and new InvalidDataTag
        try {
            throw new \Exceptions\Data\IntegrityException();
        } catch (\Exceptions\Tag\InvalidDataException $ex) {
            $this->assertTrue(true);
        }
        
        try {
            throw new \Exceptions\Data\IntegrityException();
        } catch (\Exceptions\Tag\InvalidDataTag $ex) {
            $this->assertTrue(true);
        }
    }
    
    /**
     * Ensures that you can catch the new exception with the old exception
     */
    public function testCovarianceReplacedExceptionCatching()
    {
        try {
            throw new \Exceptions\Http\Client\RangeNotSatisfiableException();
        } catch (\Exceptions\Http\Client\RequestedRangeNotSatisfiableException $ex) {
            $this->assertTrue(true);
        }
        
        try {
            throw new \Exceptions\Http\Client\PayloadTooLargeException();
        } catch (\Exceptions\Http\Client\RequestEntityTooLargeException$ex) {
            $this->assertTrue(true);
        }
        
        try {
            throw new \Exceptions\Http\Client\RangeNotSatisfiableException();
        } catch (\Exceptions\Http\Client\RequestedRangeNotSatisfiableException $ex) {
            $this->assertTrue(true);
        }
        
        try {
            throw new \Exceptions\Http\Client\PayloadTooLargeException();
        } catch (\Exceptions\Http\Client\RequestEntityTooLargeException $ex) {
            $this->assertTrue(true);
        }
    }
    
    /**
     * Ensures that you cannot catch the old exception with the new exception
     *
     * @expectedException \Exceptions\Http\Client\RequestedRangeNotSatisfiableException
     */
    public function testContravarianceReplacedExceptionCatchingShouldFail1()
    {
        try {
            throw new \Exceptions\Http\Client\RequestedRangeNotSatisfiableException();
        } catch (\Exceptions\Http\Client\RangeNotSatisfiableException $ex) {
        }
    }
    
    /**
     * Ensures that you cannot catch the old exception with the new exception
     *
     * @expectedException \Exceptions\Http\Client\RequestEntityTooLargeException
     */
    public function testContravarianceReplacedExceptionCatchingShouldFail2()
    {
        try {
            throw new \Exceptions\Http\Client\RequestEntityTooLargeException();
        } catch (\Exceptions\Http\Client\PayloadTooLargeException $ex) {
        }
    }
}
