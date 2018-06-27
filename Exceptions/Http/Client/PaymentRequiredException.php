<?php

namespace Exceptions\Http\Client;

use Exceptions\Tag\ForbiddenTag;

/**
 * The request requires user to pay to access the resource or he must supply different identification or credentials
 * to gain access to the resource.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class PaymentRequiredException extends ClientErrorException implements ForbiddenTag
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 402;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Payment Required: The resource you are accessing is not available based on your current permission but could be if you paid and extra fee. This can be related to plan limitations or just pay to use content.';
}
