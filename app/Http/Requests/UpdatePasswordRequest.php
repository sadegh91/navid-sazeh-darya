<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'password' => 'required|min:6|max:16',
            'retry_password' => 'required|min:6|max:16|same:password',
        ];
    }

    public function messages(): array
    {
        return[
            'password.required'  => 'لطفا رمز عبور را وارد کنید' ,
            'password.min'  => 'رمز عبور نباید کمتر از 6 کاراکتر باشد' ,
            'password.max'  => 'رمز عبور نباید بیشتر از 16 کاراکتر باشد' ,
            'retry_password.required'  => 'لطفا تکرار رمز عبور را وارد کنید' ,
            'retry_password.min'  => 'تکرار رمز عبور نباید کمتر از 6 کاراکتر باشد' ,
            'retry_password.max'  => 'تکرار رمز عبور نباید بیشتر از 16 کاراکتر باشد' ,
            'retry_password.same'  => 'رمز عبور باید با تکرار رکز عبور یکی باشد باشد' ,
        ];
    }
}
