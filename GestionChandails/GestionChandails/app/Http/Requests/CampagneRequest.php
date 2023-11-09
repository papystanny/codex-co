<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampagneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nom' => 'required|unique:campagnes|min:4|max:50',
            'dateDebut' => 'required|unique:campagnes|date|after:yesterday',
            'debutSondage' =>'required|unique:campagnes|date|after:yesterday',
            'finSondage' =>'required|unique:campagnes|date|after:debutSondage',
           
            
            
        ];
    }
    public function messages()
    {
   return[
     'nom.min' => 'Le nom doit avoir minimun 4 caractères.',
     'nom.max' =>' le nom ne peut contenir plus de 50 caractères',
     'nom.required'=> 'Veillez entrer le nom de la campagne',
     'dateDebut.required'=>'date de debut requise',
     'dateDebut.after'=>'la date de debut de campagne ne peut être inférieure à la date du jour',
     'debutSondage.required' =>'date de debut requise',
     'debutSondage.after' =>'la date de debut de sondage ne peut être inférieure à la date du jour',
     'finSondage.required' =>'Date de Fin requise',
     'finSondage.after' =>'la date de fin de Sondage doit être supérieure à la date de début',
     
        ];
      }
}
