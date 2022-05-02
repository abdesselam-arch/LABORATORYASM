<?php

namespace App\Http\Requests;

use App\Models\Test;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('test_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:tests,name,' . request()->route('test')->id,
            ],
            'price' => [
                'required',
            ],
            'type' => [
                'string',
                'nullable',
            ],
        ];
    }
}