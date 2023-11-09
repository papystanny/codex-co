<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'nom' => 'required|unique:articles|min:4|max:50',
            'image'=>'required|image|unique:articles|mimes:jpg,png,gif,svg|max:2048'
            //
        ];
    }
    public function messages()
    {
   return[
     'nom.min' => 'Le nom doit avoir minimun 4 caractères.',
     'nom.max' =>' le nom ne peut contenir plus de 50 caractères',
     'nom.required'=> 'Veillez entrer le nom de l\'article',
     'nom.unique'=>'cet article existe déjà',
     'image.unique'=>'cette image existe déjà',
     'image.required'=>'veillez televerser une image',
     'image.mimes'=>'format d\'images requis: jpg|png|gif|svg',
     
     
        ];
      }
}
