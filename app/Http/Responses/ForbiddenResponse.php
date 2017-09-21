<?php

namespace App\Http\Responses;

use Illuminate;

class ForbiddenResponse extends Illuminate\Http\Response
{
    public function __construct()
    {
        parent::__construct([], $this::HTTP_FORBIDDEN);
    }
}
