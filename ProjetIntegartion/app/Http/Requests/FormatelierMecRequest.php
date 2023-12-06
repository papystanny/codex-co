<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormatelierMecRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [

            'numUniteImplique' => 'required|min:5',
            'departement' => 'required|min:5|max:50',
            'prenomNomEmploye' => 'required|min:5|max:50',
            'prenomNomSupImmediat' => 'required|min:5|max:50',
            'numPermisConduireEmploye' => 'required|min:5',
            'vehiculeCityonImplique' => 'required|min:5',

            //
        ];
    }
    public function messages(){
        return [
            'numUniteImplique.required'=>'Le numUniteImplique est obligatoire.',
            'numUniteImplique.min'=>'Le numUniteImplique doit avoir au moins 5 caractères.',
            'departement.required'=>'Le departement est obligatoire.',
            'departement.min'=>'Le departement doit avoir un minimum de 5 caractères.',
            'departement.max'=>'Le departement doit avoir un maximum de 1000 caractères.',
            'prenomNomEmploye.required'=>'le prenomNomEmploye est obligatoire.',
            'prenomNomEmploye.min'=>'Le prenomNomEmploye doit avoir un minimum de 5 caractères.',
            'prenomNomEmploye.max'=>'La prenomNomEmploye  doit avoir un maximum de 500 caractères.',
            'prenomNomSupImmediat.required'=>'le prenomNomSupImmediat est obligatoire.',
            'prenomNomSupImmediat.min'=>'Le prenomNomSupImmediat doit avoir un minimum de 5 caractères.',
            'prenomNomSupImmediat.max'=>'La prenomNomSupImmediat  doit avoir un maximum de 500 caractères.',
            'numPermisConduireEmploye.required'=>'Le numPermisConduireEmploye est obligatoire.',
            'numPermisConduireEmploye.min'=>'Le numPermisConduireEmploye doit avoir au moins 5 caractères.',
            'vehiculeCityonImplique.required'=>'Le vehiculeCityonImplique est obligatoire.',
            'vehiculeCityonImplique.min'=>'Le vehiculeCityonImplique doit avoir au moins 5 caractères.',
        ];
    }
}