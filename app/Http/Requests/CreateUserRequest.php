<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'required',
            'last_name'  => 'required',
            'phone'  => 'required',
            'language'  => 'required',
            'country'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => ' فیلد نام کاربری اجباری میباشد',
            'email.required' => 'فیلد ایمیل اجباری میباشد',
            'password.required' => 'فیلد نام اجباری است',
            'password_confirm.required' => 'فیلد کلمه عبور است',
            'first_name.required' => 'فیلد تایید کلمه عبور است',
            'last_name.required' => 'فیلد نام خانوادگی اجباری است',
            'phone.required' => 'فیلد شماره اجباری است',
            'language.required' => 'فیلد زبان اجباری است',
            'country.required' => 'فیلد کشور اجباری است',
        ];
    }
}
