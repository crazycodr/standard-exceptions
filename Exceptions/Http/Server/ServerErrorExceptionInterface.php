<?php

namespace Exceptions\Http\Server;

use Exceptions\Http\HttpExceptionInterface;

/**
 * This is a tag interface used to group together all potential Server Error HTTP exceptions (500 class).
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
interface ServerErrorExceptionInterface extends HttpExceptionInterface
{
}
