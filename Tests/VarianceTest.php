<?php

namespace Exceptions\Tests;

use Exceptions\Data;
use Exceptions\Tag;
use Exceptions\Collection;
use PHPUnit\Framework\TestCase;

class VarianceTest extends TestCase
{
    /**
     * Tests that the use of the replaced interface tags can still be used to catch the exceptions that are now
     * getting thrown with the more recent tags that they extend from.
     */
    public function testCovarianceReplacedTagCatching()
    {
        try {
            throw new Data\NotFoundException();
        } catch (Tag\NotFoundTag) {
            $this->assertTrue(true);
        }

        // Ensure KeyAlreadyExistsException is still catchable by old AlreadyExistsException tag and new ExistsTag
        try {
            throw new Collection\KeyAlreadyExistsException();
        } catch (Tag\AlreadyExistsException) {
            $this->assertTrue(true);
        }

        try {
            throw new Collection\KeyAlreadyExistsException();
        } catch (Tag\ExistsTag) {
            $this->assertTrue(true);
        }

        try {
            throw new Data\IntegrityException();
        } catch (Tag\InvalidDataTag) {
            $this->assertTrue(true);
        }
    }
}
