<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:settings',
            'value' => 'required',
            'plain_value' => 'nullable|numeric'

        ];
    }
    public function messages()
    {
        return [
            // 'id.required' => 'test1',
            // 'id.exists' => 'test2',
            // 'value.required' => 'test3',
            // 'plain_value.numeric' => 'test4',



        ];
    }
}
