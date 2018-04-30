<?php

namespace Exceptions\Data;

use Exceptions\Tag\InvalidDataException;

/**
 * Use this exception when the format of data passed to your code does not fit expected format. For example:.
 *
 * - You are expecting a data format such as JSON and received data in the form of XML
 * - You are expecting a data in a format that cannot be parsed such as a bad regular expression
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FormatException extends DataException implements InvalidDataException
{
    const MESSAGE = 'Data provided is not of the expected format or cannot be parsed correctly.';
    const CODE = 0;
}
