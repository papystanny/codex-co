<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;
class Formsitdangereuse extends Model
{
    protected $table = 'formsitdangereuses';
    use HasFactory;

    protected $fillable = ['id','nomFormulaire' ,'nomEmploye', 'prenomEmploye', 'matriculeEmploye','fonctionLorsEvenement',
    'secteurActivite', 'dateObservation', 'heureObservation' , 'temoins','descriptionEvenement', 'ameliorationsProposees' ,'dateSupeAvise',
    'nomSuperviseur','signatureEmploye','dateSignatureEmploye','signatureSuperviseur',
    'dateSignatureSuperviseur'];
    public function usagers()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany('App\Models\Usager');
    }
}
