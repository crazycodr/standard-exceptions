<?php

namespace Exceptions\Tag;

/**
 * This is a tag interface that is used to conveys a shared means throughout many different exceptions in many
 * different namespaces. If you want to catch a potential error about something not being found, you would try to
 * catch any exception that implements this interface.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
interface NotFoundException
{
}
