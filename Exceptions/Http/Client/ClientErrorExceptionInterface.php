<?php

namespace Exceptions\Http\Client;

use Exceptions\Http\HttpExceptionInterface;

/**
 * This is a tag interface used to group together all potential Client Error HTTP exceptions (400 class).
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
interface ClientErrorExceptionInterface extends HttpExceptionInterface
{
}
