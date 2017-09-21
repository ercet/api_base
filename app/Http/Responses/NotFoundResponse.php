<?php

namespace App\Http\Responses;

use Illuminate;

class NotFoundResponse extends Illuminate\Http\Response
{
    /**
     * Response constructor.
     *
     * @param string $message
     */
    public function __construct($message)
    {
        parent::__construct(
            [
                'code' => 'NOT_FOUND',
                'message' => $message,
            ],
            $this::HTTP_NOT_FOUND
        );
    }
}
