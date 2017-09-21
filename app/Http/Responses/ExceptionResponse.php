<?php

namespace App\Http\Responses;

use Illuminate;

class ExceptionResponse extends Illuminate\Http\Response
{
    public function __construct($errors)
    {
        $data = [
            'success' => false,
            'data' => null,
            'errors' => $errors
        ];

        parent::__construct($data, $this::HTTP_INTERNAL_SERVER_ERROR);
    }
}
