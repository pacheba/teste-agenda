<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'celular_com_ddd', 'max:255']
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório!',
            'name.max' => 'O nome deve ter até 255 caracteres!',
            'email.required' => 'O Email é obrigatório!',
            'email.max' => 'O Email deve ter até 255 caracteres!!',
            'phone_number.required' => 'O telefone é obrigatório!',
            'phone_number.max' => 'O telefone deve ter até 255 caracteres!',
        ];
    }

    public function attributes(): array
    {
        return [
            'phone_number' => 'número de telefone',
        ];
    }
}
