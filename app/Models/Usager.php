<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormAccidentTravail;
use App\Models\Departement;
class Usager extends Model
{
    use HasFactory;
    protected $fillable = ['nom',  'prenom' , 'matricule','password','poste','droitEmploye','droitSuperieur','droitAdmin','nomSuperviseur','departement_id'];

    public function formAccidentTravail()
   {
   // return $this->belongsToMany('App\Models\Campagne');
   return $this->belongsToMany(FormAccidentTravail::class);
   }
   public function departements()
   {
   // return $this->belongsToMany('App\Models\Campagne');
   //return $this->belongsTo('App\Models\Usager');
   return $this->belongsTo(Departement::class);
   }
}
