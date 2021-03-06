<?php

namespace Exceptions\Http\Client;

/**
 * The server cannot process the request properly because the requested length/range cannot be satisfied due to
 * missing data.
 *
 * Never throw an exception at the user, always catch it can synthesize it to a correct html response with
 * appropriate headers. You can use the constants and accessor to get HTML values to return.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class RangeNotSatisfiableException extends ClientErrorException
{
    /**
     * Returns the HTTP error code for that exception.
     */
    const HTTP_CODE = 416;

    /**
     * Returns the HTTP error message for that exception.
     */
    const HTTP_MESSAGE = 'Range Not Satisfiable: The server is refusing to process a request because the requested length/range cannot be satisfied due to missing data.';
}
