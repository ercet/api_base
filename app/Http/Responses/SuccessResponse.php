<?php

namespace App\Http\Responses;

use Illuminate;

class SuccessResponse extends Illuminate\Http\Response
{
    /**
     * Response constructor.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        parent::__construct($data, $this::HTTP_OK);
    }
}
