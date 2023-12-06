<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAuditSstRequest extends FormRequest
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
            'lieuTravail' => 'required',
            'date' => 'required|date|before_or_equal:today',
            'heure' => 'required',
            'Epi' => 'required',
            'tenueLieux' => 'required',
            'comportementSecuritaire' => 'required',
            'signalisation' => 'required',
            'fichesSignaletiques' => 'required',
            'travauxEscavation' => 'required',
            'espaceClos' => 'required',
            'methodeTravail' => 'required',
            'autre' => 'required',
            'respectDistanciation' => 'required',
            'portEpi' => 'required',
            'respectProcedures' => 'required',
            'descriptionTravailHauteur' => 'required',




            //
        ];
    }
    public function messages()
    {
        return [
            'lieuTravail.required' => 'Le lieu de travail est requis',
            'date.required' => 'ce champ est obligatoire',
            'date.before_or_equal' => 'La date doit être avant ou égale à aujourd\'hui',
            'heure.required' => 'ce champ est obligatoire',
           
            'descriptionTravailHauteur.required' => 'ce champ est obligatoire',
        ];
    }
}
