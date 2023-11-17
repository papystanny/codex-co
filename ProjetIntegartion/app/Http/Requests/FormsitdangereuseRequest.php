<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsitdangereuseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'nomEmploye'=>'required|min:3|max:50',
            'prenomEmploye'=>'required|min:3|max:50',
            'matriculeEmploye'=>'required',
            'fonctionLorsEvenement'=>'required|min:3|max:200',
            'secteurActivite'=>'required|min:3|max:200',
            'temoins'=>'required|min:3|max:200',
            'descriptionEvenement'=>'required|min:3|max:200',
            'dateObservation'=>'required',
            'heureObservation'=>'required',
            'ameliorationsProposees'=>'required|min:3|max:200',
            'supAvise'=>'required|min:3|max:200',
            'nomSuperviseur'=>'required|min:3|max:200',
            'dateSupeAvise'=>'required',
            'signatureEmploye'=>'required|min:3|max:200',
            'signatureSuperviseur'=>'required|min:3|max:200',
            'dateSignatureEmploye'=>'required',
            'dateSignatureSuperviseur'=>'required',
            'numPosteSuperviseur'=>'required',
         
        ];
    }


    public function messages(){

        return [
            
            'nomEmploye.required'=>'Le nomEmploye est obligatoire.',
            'nomEmploye.min'=>'Le nomEmploye doit avoir un minimum de  3 caractères.',
            'nomEmploye.max'=>'Le nomEmploye doit avoir un maximum de 50 caractères.',
            'prenomEmploye.required'=>'Le prenomEmploye est obligatoire.',
            'prenomEmploye.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'prenomEmploye.max'=>'Le prenomEmploye doit avoir un maximum de 50 caractères.',
            'matriculeEmploye.required'=>'le matriculeEmploye est obligatoire.',
            'fonctionLorsEvenement.required'=>'Le fonctionLorsEvenement est obligatoire.',
            'fonctionLorsEvenement.min'=>'Le fonctionLorsEvenement doit avoir un minimum de  3 caractères.',
            'fonctionLorsEvenement.max'=>'Le fonctionLorsEvenement doit avoir un maximum de 200 caractères.',
            'secteurActivite.required'=>'Le secteurActivite est obligatoire.',
            'secteurActivite.min'=>'Le secteurActivite doit avoir un minimum de  3 caractères.',
            'secteurActivite.max'=>'Le secteurActivite doit avoir un maximum de 200 caractères.',
            'temoins.required'=>'Le temoins est obligatoire.',
            'temoins.min'=>'Le temoins doit avoir un minimum de  3 caractères.',
            'temoins.max'=>'Le temoins doit avoir un maximum de 200 caractères.',
            'descriptionEvenement.required'=>'Le descriptionEvenement est obligatoire.',
            'descriptionEvenement.min'=>'Le descriptionEvenement doit avoir un minimum de  3 caractères.',
            'descriptionEvenement.max'=>'Le descriptionEvenement doit avoir un maximum de 200 caractères.',
            'dateObservation.required'=>'Le dateObservation est obligatoire.',
            'heureObservation.required'=>'Le heureObservation est obligatoire.',
            'ameliorationsProposees.required'=>'Le ameliorationsProposees est obligatoire.',
            'ameliorationsProposees.min'=>'Le ameliorationsProposees doit avoir un minimum de  3 caractères.',
            'ameliorationsProposees.max'=>'Le ameliorationsProposees doit avoir un maximum de 200 caractères.',
            'supAvise.required'=>'Le supAvise est obligatoire.',
            'supAvise.min'=>'Le supAvise doit avoir un minimum de  3 caractères.',
            'supAvise.max'=>'Le supAvise doit avoir un maximum de 200 caractères.',
            'nomSuperviseur.required'=>'Le nomSuperviseur est obligatoire.',
            'nomSuperviseur.min'=>'Le nomSuperviseur doit avoir un minimum de  3 caractères.',
            'nomSuperviseur.max'=>'Le nomSuperviseur doit avoir un maximum de 200 caractères.',
            'dateSupeAvise.required'=>'Le dateSupeAvise est obligatoire.',
            'signatureEmploye.required'=>'Le signatureEmploye est obligatoire.',
            'signatureEmploye.min'=>'Le signatureEmploye doit avoir un minimum de  3 caractères.',
            'signatureEmploye.max'=>'Le signatureEmploye doit avoir un maximum de 200 caractères.',
            'signatureSuperviseur.required'=>'Le signatureSuperviseur est obligatoire.',
            'signatureSuperviseur.min'=>'Le signatureSuperviseur doit avoir un minimum de  3 caractères.',
            'signatureSuperviseur.max'=>'Le signatureSuperviseur doit avoir un maximum de 200 caractères.',
            'dateSignatureEmploye.required'=>'Le dateSignatureEmploye est obligatoire.',
            'dateSignatureSuperviseur.required'=>'Le dateSignatureSuperviseur est obligatoire.',
            'numPosteSuperviseur.required'=>'Le numPosteSuperviseur est obligatoire.',
           
            
        ];
    }
}
