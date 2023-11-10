<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;
class Formaccidentstravail extends Model
{
    use HasFactory;
    protected $fillable = ['nomEmploye','fonctionMomentEvenement','matriculeEmploye' , 'dateAccident', 'heureAccident', 'nomsTemoins', 'endroitAccident','secteurActivite','natureSiteBlessure','descriptionBlessure','violence','descriptionDeroulementBlessure','premiersSoins','nomSecouriste','necessiteAccident','supAvise','nomSuperviseurAvise','prenomSuperviseurAvise','dateSuperviseurAvise','signatureSupImmediat','numPosteSupImmediat','dateSignatureSupImmediat','signatureEmploye','numPosteEmploye','dateSignatureEmploye','notifSup','notifAdmin' ];

    public function usagers()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Usager::class);
    }
    

}
