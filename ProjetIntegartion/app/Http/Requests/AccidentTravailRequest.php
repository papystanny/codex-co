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
            'matriculeEmploye' => 'required|numeric',
            'dateAccident' => 'required|date|before_or_equal:today',
            'heureAccident' => 'required',
            'nomsTemoins' => 'required',
            'endroitAccident' => 'required',
            'secteurActivite' => 'required',
            'natureSiteBlessure' => 'required|array|min:1',
            'descriptionBlessure' => 'required|array|min:1',
            'violence'=> 'required',
            'descriptionDeroulementBlessure' => 'required',
            'premiersSoins' => 'required',
            'nomSecouriste' => 'required',
            'necessiteAccident'=> 'required',
            'supAvise'=> 'required',
            'nomSuperviseurAvise'=> 'required',
            'prenomSuperviseurAvise'=> 'required',
            'dateSuperviseurAvise'=> 'required|date|before_or_equal:today',
            'signatureSupImmediat'=> 'required',
            'numPosteSupImmediat'=> 'required',
            'dateSignatureSupImmediat'=> 'required|date|before_or_equal:today',
            'signatureEmploye'=> 'required',
            'numPosteEmploye'=> 'required',
            'dateSignatureEmploye'=> 'required|date|before_or_equal:today',

          

        ];
    }
    public function messages()
    {
        return [
            'fonctionMomentEvenement.required' => 'La fonction de l\'employé au moment de l\'événement est requise',
            'matriculeEmploye.required' => 'Le matricule de l\'employé est requis',
            'dateAccident.required' => 'La date de l\'accident est requise',
            'dateAccident.before_or_equal' => 'La date de l\'accident doit être avant ou égale à aujourd\'hui',
            'heureAccident.required' => 'L\'heure de l\'accident est requise',
           'nomsTemoins.required' => 'Le nom des témoins est requis',
            'endroitAccident.required' => 'L\'endroit de l\'accident est requis',
            'secteurActivite.required' => 'Le secteur d\'activité est requis',
            'natureSiteBlessure.required' => 'vous devez selectionner aumoins un element',
            'natureSiteBlessure.min' => 'vous devez selectionner aumoins un element',
            'descriptionBlessure.required' => 'vous devez selectionner aumoins un element',
            'descriptionBlessure.min' => 'vous devez selectionner aumoins un element',
            'violence.required' => 'vous devez cocher un élément',
            'descriptionDeroulementBlessure.required' => 'ce champ est requis',
            'premiersSoins.required' => 'veillez renseigner ce champ',
            'nomSecouriste.required' => 'Le nom du secouriste est requis',
            'necessiteAccident.required' => 'cochez un élément',
            'supAvise.required' => 'veillez indiquer si le superviseur a été avisé',
            'nomSuperviseurAvise.required' => 'Le nom du superviseur avisé est requis',
            'prenomSuperviseurAvise.required' => 'Le prénom du superviseur avisé est requis',
            'dateSuperviseurAvise.required' => 'La date à laquelle le superviseur a été avisé est requise',
            'dateSuperviseurAvise.before_or_equal' => 'La date à laquelle le superviseur a été avisé doit être avant ou égale à aujourd\'hui',
            'signatureSupImmediat.required' => 'La signature du superviseur immédiat est requise',
            'numPosteSupImmediat.required' => 'Le numéro de poste du superviseur immédiat est requis',
            'dateSignatureSupImmediat.required' => 'La date de la signature du superviseur immédiat est requise',
            'dateSignatureSupImmediat.before_or_equal' => 'La date de la signature du superviseur immédiat doit être égale à aujourd\'hui',
            'signatureEmploye.required' => 'La signature de l\'employé est requise',
            'numPosteEmploye.required' => 'Le numéro de poste de l\'employé est requis',
            'dateSignatureEmploye.required' => 'La date de la signature de l\'employé est requise',
            'dateSignatureEmploye.before_or_equal' => 'La date de la signature de l\'employé doit être égale à aujourd\'hui',

        ];
    }

}
