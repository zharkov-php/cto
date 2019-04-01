<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'name'   =>  'required|min:5|max:40',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'message' => 'required|min:5|max:500',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [

            'name.required' => 'Имя - обязательное поле  для заполнения!!!',
            'name.min' => 'Имя - Минимум 5 символов!!!',
            'name.max' => 'Имя - Максимум 40 символов!!!',

            'email.required' => 'Почта - обязательное поле для заполнения!!!',
            'email.email' => 'Почта - должна быть почтой!!!',

            'phone.required' => 'Телефон - обязательное поле для заполнения!!!',
            'phone.integer' => 'Телефон - должен быть номером!!!',

            'message.required' => 'Сообщение - обязательное поле для заполнения!!!',
            'message.min' => 'Сообщение - Минимум 5 символов!!!',
            'message.max' => 'Сообщение - Максимум 500 символов!!!',

        ];
    }
}
