<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'photo' => 'required|string|nullable',
            'tel' => 'required|string|min:8|max:11',
            'dateOfBirth' => 'required|date',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Данные должны соответствовать строчному типу',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Данные должны соответствовать строчному типу',
            'email.email' => 'Ваша почта должна соответствовать формату email',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.required' => 'Это поле необходимо для заполнения',
        ];
    }
}
