<?php

namespace App\Http\Responses;

use Illuminate;

class InternalServerErrorResponse extends Illuminate\Http\Response
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
                'code' => 'INTERNAL_SERVER_ERROR',
                'message' => $message,
            ],
            $this::HTTP_INTERNAL_SERVER_ERROR
        );
    }
}
