<?php

namespace Exceptions\Data;

use Exceptions\Tag\NotFoundException as NotFoundTag;

/**
 * Use this exception when the data requested by your code cannot be found. In most scenarios, this is the equivalent
 * of an item that cannot be found in a filesystem or in a database. The big difference is that this item is not
 * linked to a specific context such as the filesystem nor is it linked to the HTTP context.
 *
 * If the code in context is a service provider that queries a database, this would be the right exception to throw
 * and listen for. The controller on the other hand would catch this and throw a NotFoundException from the Http
 * namespace which would be converted to a standardized message in the front controller.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotFoundException extends DataException implements NotFoundTag
{
    public function __construct(
        $message = 'Data requested for cannot be found in the data source.',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
