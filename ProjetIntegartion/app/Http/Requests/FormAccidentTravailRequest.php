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
        ];
    }
    public function messages()
    {
        return [
            'nomEmploye.required' => 'Le nom de l\'employé est requis',
            'fonctionMomentEvenement.required' => 'La fonction de l\'employé au moment de l\'événement est requise',
            'matriculeEmploye.required' => 'Le matricule de l\'employé est requis',
        ];
    } 
}
