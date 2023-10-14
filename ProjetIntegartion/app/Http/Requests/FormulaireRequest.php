<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireRequest extends FormRequest
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
     *
     */
    public function rules(): array
    {
        return [
            'nomEmploye'=>'required|min:3|max:50',
            'prenomEmploye'=>'required|min:3|max:50',
            'matriculeEmploye'=>'required'|'integer',
            'fonctionLorsEvenement'=>'required|min:3|max:200',
            'secteurActivite'=>'required|min:3|max:200',
            'temoins'=>'required|min:3|max:200',
            'descriptionEvenement'=>'required|min:3|max:200',
            'dateObservation'=>'required'|'date',
            'heureObservation'=>'required'|'time',
            'ameliorationsProposees'=>'required|min:3|max:200',
            'supAvise'=>'required|min:3|max:200',
            'nomSuperviseur'=>'required|min:3|max:200',
            'dateSupeAvise'=>'required'|'date',
            'signatureEmploye'=>'required|min:3|max:200',
            'signatureSuperviseur'=>'required|min:3|max:200',
            'dateSignatureEmploye'=>'required'|'date',
            'dateSignatureSuperviseur'=>'required'|'date',
            'numPosteSuperviseur'=>'required'|'integer',
            'notifSup'=>'required|min:3|max:200',
            'notifAdmin'=>'required|min:3|max:200',
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
            'fonctionLorsEvenement.required'=>'Le prenomEmploye est obligatoire.',
            'fonctionLorsEvenement.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'fonctionLorsEvenement.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'secteurActivite.required'=>'Le prenomEmploye est obligatoire.',
            'secteurActivite.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'secteurActivite.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'temoins.required'=>'Le prenomEmploye est obligatoire.',
            'temoins.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'temoins.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'descriptionEvenement.required'=>'Le prenomEmploye est obligatoire.',
            'descriptionEvenement.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'descriptionEvenement.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'dateObservation.required'=>'Le prenomEmploye est obligatoire.',
            'heureObservation.required'=>'Le prenomEmploye est obligatoire.',
            'ameliorationsProposees.required'=>'Le prenomEmploye est obligatoire.',
            'ameliorationsProposees.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'ameliorationsProposees.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'supAvise.required'=>'Le prenomEmploye est obligatoire.',
            'supAvise.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'supAvise.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'nomSuperviseur.required'=>'Le prenomEmploye est obligatoire.',
            'nomSuperviseur.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'nomSuperviseur.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'dateSupeAvise.required'=>'Le prenomEmploye est obligatoire.',
            'signatureEmploye.required'=>'Le prenomEmploye est obligatoire.',
            'signatureEmploye.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'signatureEmploye.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'signatureSuperviseur.required'=>'Le prenomEmploye est obligatoire.',
            'signatureSuperviseur.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'signatureSuperviseur.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'dateSignatureEmploye.required'=>'Le prenomEmploye est obligatoire.',
            'dateSignatureSuperviseur.required'=>'Le prenomEmploye est obligatoire.',
            'numPosteSuperviseur.required'=>'Le prenomEmploye est obligatoire.',
            'notifSup.required'=>'Le prenomEmploye est obligatoire.',
            'notifSup.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'notifSup.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
            'notifAdmin.required'=>'Le prenomEmploye est obligatoire.',
            'notifAdmin.min'=>'Le prenomEmploye doit avoir un minimum de  3 caractères.',
            'notifAdmin.max'=>'Le prenomEmploye doit avoir un maximum de 200 caractères.',
           
            
        ];
    }
}
