<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAccidentTravailRequest extends FormRequest
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
            //
            'nomEmploye' => 'required',
            'fonctionMomentEvenement' => 'required',
            'matriculeEmploye' => 'required',
            'dateAccident' => 'required',
            'heureAccident' => 'required',
            'lieuAccident' => 'required',
            'endroitAccident' => 'required',
            'secteurActivite' => 'required',
            'natureSiteBlessure' => 'required',
            'descriptionBlessure' => 'required',
            'violence'=> 'required',
            'descriptionDeroulementBlessure' => 'required',
            'premiersSoins' => 'required',
            'nomSecouriste' => 'required',
            'necessiteAccident'=> 'required',
            'supAvise'=> 'required',
            'nomSuperviseurAvise'=> 'required',
            'dateSuperviseurAvise'=> 'required',
            'signatureSupImmediat'=> 'required',
            'numPosteSupImmediat'=> 'required',
            'dateSignatureSupImmediat'=> 'required',
            'signatureEmploye'=> 'required',
            'numPosteEmploye'=> 'required',
            'dateSignatureEmploye'=> 'required',


        ];
    }
    public function messages()
    {
        return [
            'nomEmploye.required' => 'Le nom de l\'employé est requis',
            'fonctionMomentEvenement.required' => 'La fonction de l\'employé au moment de l\'événement est requise',
            'matriculeEmploye.required' => 'Le matricule de l\'employé est requis',
            'dateAccident.required' => 'La date de l\'accident est requise',
            'heureAccident.required' => 'L\'heure de l\'accident est requise',
            'lieuAccident.required' => 'Le lieu de l\'accident est requis',
            'endroitAccident.required' => 'L\'endroit de l\'accident est requis',
            'secteurActivite.required' => 'Le secteur d\'activité est requis',
            'natureSiteBlessure.required' => 'La nature du site de la blessure est requise',
            'descriptionBlessure.required' => 'La description de la blessure est requise',
            'violence.required' => 'La violence est requise',
            'descriptionDeroulementBlessure.required' => 'La description du déroulement de la blessure est requise',
            'premiersSoins.required' => 'Les premiers soins sont requis',
            'nomSecouriste.required' => 'Le nom du secouriste est requis',
            'necessiteAccident.required' => 'La nécessité de l\'accident est requise',
            'supAvise.required' => 'Le supérieur immédiat est requis',
            'dateSuperviseurAvise.required' => 'La date à laquelle le superviseur a été avisé est requise',
            'nomSuperviseurAvise.required' => 'Le nom du superviseur est requis',
            'signatureSupImmediat.required' => 'La signature du supérieur immédiat est requise',
            'numPosteSupImmediat.required' => 'Le numéro de poste du supérieur immédiat est requis',
            'dateSignatureSupImmediat.required' => 'La date de la signature du supérieur immédiat est requise',
            'signatureEmploye.required' => 'La signature de l\'employé est requise',
            'numPosteEmploye.required' => 'Le numéro de poste de l\'employé est requis',
            'dateSignatureEmploye.required' => 'La date de la signature de l\'employé est requise',

        ];
    } 
}
