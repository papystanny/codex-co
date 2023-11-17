<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreationURequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [

            'nomc' => 'required',
            'prenomc' => 'required',
            'emailc' => 'required|email|unique:usagers',
            'passwordc' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return [
            'nomc.required' => 'Le champ nom est obligatoire.',
            'prenomc.required' => 'Le champ prénom est obligatoire.',
            'emailc.required' => 'Le champ e-mail est obligatoire.',
            'emailc.email' => 'Le champ e-mail doit être une adresse e-mail valide.',
            'emailc.unique' => 'l\' email est déja utilisé.',
            'passwordc.required' => 'Le champ mot de passe est obligatoire.',
            'passwordc.min' => 'Le mot de passe doit contenir au moins 4 caractères.',
           

        ];
    }
}
