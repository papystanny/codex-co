<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;
class Formaccidentstravail extends Model
{
    use HasFactory;
    protected $fillable = ['nomFormulaire','nomEmploye','fonctionMomentEvenement','matriculeEmploye' , 'dateAccident', 'heureAccident', 'nomsTemoins', 'endroitAccident','secteurActivite','natureSiteBlessure','descriptionBlessure','violence','descriptionDeroulementBlessure','premiersSoins','nomSecouriste','necessiteAccident','nomSuperviseurAvise','prenomSuperviseurAvise','dateSuperviseurAvise','signatureEmploye','dateSignatureEmploye','notifSup','notifAdmin' ];



    public function usagers()
    {
        return $this->belongsToMany(Usager::class, 'formaccidentstravail_usager', 'formAccidentsTravail_id', 'usager_id');
    }
    
    

}
