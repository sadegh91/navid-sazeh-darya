<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertUserRequest extends FormRequest
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
            'national_code' => 'required|digits:10|unique:users,national_code',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'role' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'national_code.required'  => 'لطفا کد ملی را وارد کنید' ,
            'national_code.digits'  => 'کد ملی باید 10 رقمی باشد' ,
            'national_code.unique'  => 'کاربری با این کد ملی ثبت شده است' ,
            'first_name.required' => 'لطفا نام را وارد کنید',
            'first_name.max' => 'نام نباید بیشتر از 50 کاراکتر باشد',
            'last_name.required' => 'لطفا نام خانوادگی را وارد کنید',
            'last_name.max' => 'نام خانوادگی نباید بیشتر از 50 کاراکتر باشد',
            'role.required' => 'لطفا نوع کاربر را تعیین کنید',
        ];
    }
}
