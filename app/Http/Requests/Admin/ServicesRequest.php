<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'   =>  'required|min:5|max:100',
            'title' => 'required|min:5|max:500',
            'image' =>  'nullable|image'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Название услуги - обязательное для заполнения!!!',
            'name.min' => 'Название услуги - Минимум 5 символов!!!',
            'name.max' => 'Максимум 100 символов!!!',
            'title.required' => 'Краткое описание услуги - обязательное для заполнения!!!',
            'title.min' => 'Краткое описание услуги - Минимум 5 символов!!!',
            'title.max' => 'Максимум 500 символов!!!',

        ];
    }
}
