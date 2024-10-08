<?php

namespace Exceptions\Operation;

use Exceptions\Tag\InvalidDataTag;

/**
 * Use this exception in the event something went wrong with the state of the application, and you cannot allow
 * executing this operation because of that state. For example, processing a report with no report specified would
 * yield an exception of type InvalidOperationException or something similar/custom based on it. This whole set of
 * exceptions didn't exist before but should have as many operations can end up being impossible to execute.
 *
 * Use this exception sparingly and create sub exceptions to these exceptions to be more verbose when necessary.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidOperationException extends OperationException implements InvalidDataTag
{
    public const MESSAGE = 'The attempted operation resulted in an unexpected/invalid state and cannot continue';
    public const CODE = 0;
}
