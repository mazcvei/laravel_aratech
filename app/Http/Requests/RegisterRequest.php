<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:5|max:255',
            'email' => 'required|string|lowercase|min:8|email|max:255|unique:'.User::class,
            'password' => ['required','confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages(){
        return [
            'name.required'=> "El campo nombre no se ha completado",
            'name.min'=> "El campo nombre debe tener al menos 3 caracteres",
            'password.confirmed'=>"Las dos contraseñas no coinciden"
        ];
    }
}
