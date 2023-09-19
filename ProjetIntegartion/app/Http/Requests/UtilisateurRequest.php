<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
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

        'id'=>'required|min:3|max:30|alpha:ascii',
         'password'=>'required|min:3|max:30',

    ];

    }




    public function messages(){

    return [

    'id.unique'=>'Cet id_usager est déjà utilisé.',
    'id.min'=>'L\'id_usager doit avoir un minimum 5 caractères.',
    'id.max'=>'L\'id_usager doit avoir un maximum de 50 caractères.',
    'id.required'=>'id_usager est obligatoire.',
    'password'=>'le Mot de passe  est obligatoire'
    ];
        }

}
