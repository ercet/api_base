<?php

namespace App\Http\Responses;

use Illuminate;

class BadRequestResponse extends Illuminate\Http\Response
{
    public function __construct($errors)
    {
        $data = [
            'success' => false,
            'data' => null,
            'errors' => $errors
        ];

        parent::__construct($data, $this::HTTP_BAD_REQUEST);
    }
}
