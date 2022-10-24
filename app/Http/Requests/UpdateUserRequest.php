<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'  => 'required',
            'language'  => 'required',
            'country'  => 'required',
            'website'  => 'nullable',
            'company'  => 'nullable',
            'roles'  => 'array',
            'timezone'=>'required',
            'currency'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'فیلد نام اجباری است',
            'last_name.required' => 'فیلد نام خانوادگی اجباری است',
            'phone.required' => 'فیلد شماره اجباری است',
            'language.required' => 'فیلد زبان اجباری است',
            'country.required' => 'فیلد کشور اجباری است',
        ];
    }

}
