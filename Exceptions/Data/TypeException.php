<?php

namespace Exceptions\Data;

use Exceptions\Tag\InvalidDataException;

/**
 * The data provided to your code is not of the right type. This is part of the validation group of exceptions but
 * pertains to type validation. You received an int and were expecting an object but did not want to use type hinting
 * for flexibility? Throw this exception!
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class TypeException extends DataException implements InvalidDataException
{
    const MESSAGE = 'Type of the data is incorrect';
    const CODE = 0;
}
