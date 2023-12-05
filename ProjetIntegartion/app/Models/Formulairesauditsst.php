<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;
class Formulairesauditsst extends Model
{
    use HasFactory;
    protected $fillable = ['nomEmploye','lieuTravail','date' , 'heure', 'Epi', 'tenueLieux', 'comportementSecuritaire', 'signalisation','fichesSignaletiques','traveauxEscavation','espaceClos','methodeTravail','autre','respectDistanciation','portEpi','respectProcedures','descriptionTravailHauteur','notifSup','notifAdmin' ];
    public function usagers()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Usager::class,'formulairesauditsst_usager','formulairesauditsst_id','usager_id');
    }

}
