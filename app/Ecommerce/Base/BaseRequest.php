<?php

namespace App\Ecommerce\Base;
use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    public function messages()
    {
        return trans('validation');
    }

    public function attributes()
    {
        return trans('form');
    }
}

