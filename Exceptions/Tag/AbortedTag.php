<?php

namespace Exceptions\Tag;

/**
 * This is a tag interface that is used to conveys a shared means throughout many different exceptions in many
 * different namespaces. If you want to catch a potential error about something not being completed for different
 * reasons, then you would want to catch any exception that implements this interface.
 *
 * @deprecated 3.0
 * @see https://github.com/crazycodr/standard-exceptions/blob/master/docs/tags.md
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
interface AbortedTag extends OperationAbortedException
{
}
