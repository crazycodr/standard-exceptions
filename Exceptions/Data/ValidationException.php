<?php

namespace Exceptions\Data;

use Exceptions\Tag\InvalidDataTag;

/**
 * The data provided to your code is not following expected validations. These validations should be considered
 * as any of the business model validations or domain validation. Something does not pass the basic validation steps,
 * then you should throw this.
 *
 * Note that integrity tests should be one being thrown when the validation goes further than domain or business
 * validation. If the references between objects and uniqueness or constraints of data fails on storage, it should be
 * an IntegrityException that is thrown back.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ValidationException extends DataException implements InvalidDataTag
{
    const MESSAGE = 'Provided data does not conform to business model or basic domain validation rules';
    const CODE = 0;
}
