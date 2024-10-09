<?php

namespace Exceptions\Operation;

/**
 * Use this exception when someone is calling a function/method that is not implemented yet. This is a good practice
 * when implementing a lot of new functionality. Coupled to unit tests, you should not miss a NotImplementedException
 * but at least the message is more verbose.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotImplementedException extends OperationException
{
    public const MESSAGE = 'Feature not implemented yet';
    public const CODE = 0;
}
