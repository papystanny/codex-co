<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;

class Formsitdangereuse extends Model
{
    protected $table = 'formsitdangereuses';
    use HasFactory;

    protected $fillable = ['id', 'nomEmploye', 'prenomEmploye', 'matriculeEmploye','fonctionLorsEvenement',
    'secteurActivite', 'dateObservation', 'heureObservation' , 'temoins','descriptionEvenement', 'ameliorationsProposees' , 'supAvise','dateSupeAvise',
    'nomSuperviseur','signatureEmploye','dateSignatureEmploye','signatureSuperviseur',
    'numPosteSuperviseur','dateSignatureSuperviseur' ];

    public function usagers()
    {
        return $this->belongsToMany(Usager::class, 'formsitdangereuse_usager','formSitDangereuse_id',  'usager_id');
    }

}
