<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
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
            'date' => 'required',
            'model' => 'required|min:3|max:40',
            'run' => 'required|integer',
            'service' => 'required',
            'name'   =>  'required|min:5|max:40',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'text' => 'required|min:5|max:500',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [

            'date.required' => 'Дата - обязательное поле для заполнения!!!',

            'model.required' => 'Модель - обязательное поле для заполнения!!!',
            'model.min' => 'Модель - Минимум 3 символов!!!',
            'model.max' => 'Сообщение - Максимум 40 символов!!!',

            'run.required' => 'Пробег - обязательное поле для заполнения!!!',
            'run.integer' => 'Пробег - должен быть номером!!!',

            'service.required' => 'Услуга - обязательное поле для заполнения!!!',

            'name.required' => 'Имя - обязательное поле для заполнения!!!',
            'name.min' => 'Имя - Минимум 5 символов!!!',
            'name.max' => 'Имя - Максимум 40 символов!!!',

            'email.required' => 'Почта - обязательное поле для заполнения!!!',
            'email.email' => 'Почта - должна быть почтой!!!',

            'phone.required' => 'Телефон - обязательное поле для заполнения!!!',
            'phone.integer' => 'Телефон - должен быть номером!!!',

            'text.required' => 'Сообщение - обязательное поле для заполнения!!!',
            'text.min' => 'Сообщение - Минимум 5 символов!!!',
            'text.max' => 'Сообщение - Максимум 500 символов!!!',

        ];
    }
}
