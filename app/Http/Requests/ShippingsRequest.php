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
            'email' => 'required|email',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'يجب ادخال البريد الالكتروني',
            'email.email' => 'صيغة البريد الالكتروني غير صحيحة',
            'password.required' => 'يجب ادخال كلمة المرور',

        ];
    }
}
