<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }


    /**
     * Manipula as falhas de validação e retornar uma resposta JSON com os erros de validação.
     *
     * @param Validator $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'error' => $validator->errors(),
        ], 422)); //O Código de status HTTP 422 significa "Unprocessable Entity" (Entidade não processavel). Esse código é usado quando o servidor entende entende a requisição do cliente, mas não pode processa-la devido a erros de validação no lado do servidor.
    }

    public function messages()
    {

        return [
            'name.required' => 'O campo nome é obrigatório!',
            'email.required' => 'O campo e-mail é obrigatório!',
            'email.email' => 'Digite um e-mail válido!',
            'email.unique' => 'O email informado não está disponível!',
            'password.required' => 'O campo senha é obrigatório!',
            'password.min' => 'O campo senha deve conter no mínimo :min caracteres!',
        ];
        
    }
}
