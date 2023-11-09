<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            
            'email' => 'required|email',
            'password' => 'required|min:4',

          
         
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Veuillez saisir un email',
            'email.email' => 'Le champ e-mail doit être une adresse e-mail valide.',
            'password.required' => 'Le champ mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 4 caractères.',
           
       
            
        ];
    }


}
