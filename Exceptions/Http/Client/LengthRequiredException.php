<?php

namespace Exceptions\Http\Client;

/**
 * The request could not be completed because the underlying process requires you to provide a length/range on the
 * request.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class LengthRequiredException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 411;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Length Required: The request cannot be completed because the resource you are requesting for can only be satisfied if you provide the length/range you want to get access to.';
}
