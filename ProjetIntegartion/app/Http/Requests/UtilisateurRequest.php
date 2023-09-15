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

        'id_usager'=>'required|min:3|max:30|alpha:ascii',
         'mdp'=>'required|min:3|max:30',

    ];

    }




    public function messages(){

    return [

    'id_usager.unique'=>'Cet id_usager est déjà utilisé.',
    'id_usager.min'=>'L\'id_usager doit avoir un minimum 5 caractères.',
    'id_usager.max'=>'L\'id_usager doit avoir un maximum de 50 caractères.',
    'id_usager.required'=>'id_usager est obligatoire.',
    'mdp'=>'le Mot de passe  est obligatoire'
    ];
        }

}
