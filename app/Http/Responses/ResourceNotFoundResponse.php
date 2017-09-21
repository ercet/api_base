<?php

namespace App\Http\Responses;

use Illuminate;

class ResourceNotFoundResponse extends Illuminate\Http\Response
{
    public function __construct()
    {
        parent::__construct([], $this::HTTP_UNPROCESSABLE_ENTITY);
    }
}
