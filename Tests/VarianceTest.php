<?php

namespace Exceptions\Tests;

use Exceptions\Data;
use Exceptions\Tag;
use Exceptions\Operation;
use Exceptions\Collection;
use Exceptions\Http;
use PHPUnit\Framework\TestCase;

class VarianceTest extends TestCase
{
    /**
     * Tests that the use of the replaced interface tags can still be used to catch the exceptions that are now
     * getting thrown with the more recent tags that they extend from.
     */
    public function testCovarianceReplacedTagCatching()
    {
        // Ensure NotFoundException is still catchable by old NotFoundException tag and new NotFoundTag
        try {
            throw new Data\NotFoundException();
        } catch (Tag\NotFoundException $ex) {
            $this->assertTrue(true);
        }

        try {
            throw new Data\NotFoundException();
        } catch (Tag\NotFoundTag $ex) {
            $this->assertTrue(true);
        }

        // Ensure NotImplementedException is still catchable by old OperationAbortedException tag and new AbortedTag
        try {
            throw new Operation\NotImplementedException();
        } catch (Tag\OperationAbortedException $ex) {
            $this->assertTrue(true);
        }

        try {
            throw new Operation\NotImplementedException();
        } catch (Tag\AbortedTag $ex) {
            $this->assertTrue(true);
        }

        // Ensure KeyAlreadyExistsException is still catchable by old AlreadyExistsException tag and new ExistsTag
        try {
            throw new Collection\KeyAlreadyExistsException();
        } catch (Tag\AlreadyExistsException $ex) {
            $this->assertTrue(true);
        }

        try {
            throw new Collection\KeyAlreadyExistsException();
        } catch (Tag\ExistsTag $ex) {
            $this->assertTrue(true);
        }

        // Ensure IntegrityException is still catchable by old InvalidDataException tag and new InvalidDataTag
        try {
            throw new Data\IntegrityException();
        } catch (Tag\InvalidDataException $ex) {
            $this->assertTrue(true);
        }

        try {
            throw new Data\IntegrityException();
        } catch (Tag\InvalidDataTag $ex) {
            $this->assertTrue(true);
        }
    }

    /**
     * Ensures that you can catch the new exception with the old exception
     */
    public function testCovarianceReplacedExceptionCatching()
    {
        try {
            throw new Http\Client\RangeNotSatisfiableException();
        } catch (Http\Client\RequestedRangeNotSatisfiableException $ex) {
            $this->assertTrue(true);
        }

        try {
            throw new Http\Client\PayloadTooLargeException();
        } catch (Http\Client\RequestEntityTooLargeException$ex) {
            $this->assertTrue(true);
        }

        try {
            throw new Http\Client\RangeNotSatisfiableException();
        } catch (Http\Client\RequestedRangeNotSatisfiableException $ex) {
            $this->assertTrue(true);
        }

        try {
            throw new Http\Client\PayloadTooLargeException();
        } catch (Http\Client\RequestEntityTooLargeException $ex) {
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
            throw new Http\Client\RequestedRangeNotSatisfiableException();
        } catch (Http\Client\RangeNotSatisfiableException $ex) {
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
            throw new Http\Client\RequestEntityTooLargeException();
        } catch (Http\Client\PayloadTooLargeException $ex) {
        }
    }
}
