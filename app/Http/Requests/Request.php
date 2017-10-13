<?php

namespace App\Http\Requests;

use Illuminate;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Responses\ForbiddenResponse;
use App\Http\Responses\BadRequestResponse;
use Illuminate\Http\Exception\HttpResponseException;

abstract class Request extends Illuminate\Foundation\Http\FormRequest
{
    /**
     * @param Validator $validator
     *
     * @return BadRequestResponse
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            new BadRequestResponse($this->formatErrors($validator))
        );
    }
}
