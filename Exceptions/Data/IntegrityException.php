<?php

namespace Exceptions\Data;

use Exceptions\Tag\InvalidDataTag;

/**
 * Use this exception when the data passed to your code would create an integrity issue. For example, the storage
 * engine you are using complains that a foreign key or constraint is being violated.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class IntegrityException extends DataException implements InvalidDataTag
{
    public const MESSAGE = 'Data provided is not of the expected format or cannot be parsed correctly.';
    public const CODE = 0;
}
