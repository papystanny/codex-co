<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireMecRequest extends FormRequest
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
            'reponseone'=>'required'|'integer',
            'reponsetwo'=>'required',
            'reponsetrois'=>'required',
            'reponsequatre'=>'required'|'integer',
            'reponsecinq'=>'required',
        ];
    }

    public function messages(){

        return [
        
         'reponseone.required'=>'La reponseone est obligatoire.',
         'reponsetwo.required'=>'La reponsetwo est obligatoire.',
         'reponsetrois.required'=>'La reponsetrois est obligatoire.',
         'reponsequatre.required'=>'La reponsequatre est obligatoire.',
         'reponsecinq.required'=>'La reponsecinq est obligatoire.',
         
        ];
            }
}
