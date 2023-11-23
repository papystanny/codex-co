<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccidentTravailRequest extends FormRequest
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
            //
            'fonctionMomentEvenement' => 'required',
            'matriculeEmploye' => 'required',
            'dateAccident' => 'required',
            'heureAccident' => 'required',
            'nomsTemoins' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'fonctionMomentEvenement.required' => 'La fonction de l\'employé au moment de l\'événement est requise',
            'matriculeEmploye.required' => 'Le matricule de l\'employé est requis',
            'dateAccident.required' => 'La date de l\'accident est requise',
            'heureAccident.required' => 'L\'heure de l\'accident est requise',
           'nomsTemoins.required' => 'Le nom des témoins est requis',

        ];
    }

}
