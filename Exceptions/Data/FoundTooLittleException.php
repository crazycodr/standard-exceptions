<?php

namespace Exceptions\Data;

/**
 * Use this exception when the data requested by your code was found, but it found actually less than expected. A
 * good use for this is when you are looking for a specific set of items such as 10 items, but you end up finding only
 * 9. In this case, you throw this exception.
 *
 * If the code in context is a service provider that queries a database, this would be the right exception to throw
 * and listen for. The controller on the other hand would catch this and throw a NotFoundException from the Http
 * namespace which would be converted to a standardized message in the front controller.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FoundTooLittleException extends DataException
{
    public const MESSAGE = 'Found too little items in the data source.';
    public const CODE = 0;
}
