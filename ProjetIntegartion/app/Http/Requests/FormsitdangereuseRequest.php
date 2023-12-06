<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsitdangereuseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            
            'fonctionLorsEvenement'=>'required|min:3|max:200',
            'secteurActivite'=>'required|min:3|max:200',
            'temoins'=>'required|min:3|max:200',
            'descriptionEvenement'=>'required|min:3|max:200',
            'dateObservation'=>'required',
            'heureObservation'=>'required',
            'ameliorationsProposees'=>'required|min:3|max:200',
            
        ];
    }


    public function messages(){

        return [
            
           
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
                      
        ];
    }
}