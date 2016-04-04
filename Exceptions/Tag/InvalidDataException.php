<?php

namespace Exceptions\Tag;

/**
 * This is a tag interface that is used to conveys a shared means throughout many different exceptions in many
 * different namespaces. If you want to catch a potential error about something not being valid, such as the
 * structure of data, the type of data, the validation rules or the integrity of data that might fail then you
 * need to catch this interface.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
interface InvalidDataException
{
}
