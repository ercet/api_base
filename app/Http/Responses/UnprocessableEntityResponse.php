<?php

namespace App\Http\Responses;

use Illuminate;

class UnprocessableEntityResponse extends Illuminate\Http\Response
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
                'code' => 'UNPROCESSABLE_ENTITY',
                'message' => $message,
            ],
            $this::HTTP_UNPROCESSABLE_ENTITY
        );
    }
}
