<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoleRequest extends FormRequest
{

    public $title;
    public $name;
    public $permissions;

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
            'title' => 'required',
            'name' => 'required',
            'permissions'=>'array'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => ' فیلد نام اجباری میباشد',
            'name.required' => 'فیلد نام نمایشی اجباری میباشد',
            'permissions.array' => 'لطفا دسترسی های مورد نیاز را انتخاب کنید',
        ];
    }
}
