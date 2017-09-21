<?php

namespace App\Http\Responses;

use Illuminate;

class UnauthorizedResponse extends Illuminate\Http\Response
{
    /**
     * Response constructor.
     */
    public function __construct()
    {
        parent::__construct('', $this::HTTP_UNAUTHORIZED);
    }
}
