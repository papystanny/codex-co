<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouleurRequest extends FormRequest
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
            //
            'nom' => 'required|unique:couleurs|min:4|max:20',
        ];
    }
    public function messages()
    {
   return[
     'nom.min' => 'Le nom doit avoir minimun 4 caractères.',
     'nom.max' =>' le nom ne peut contenir plus de 20 caractères',
     'nom.required'=> 'Veillez entrer la couleur de l\'article',
     'nom.unique'=>'cette couleur existe déja',
    
     
     
        ];
      }
}
