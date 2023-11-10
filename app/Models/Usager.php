<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormaccidentsTravail;
use App\Models\Departement;
use Illuminate\Notifications\Notifiable;
class Usager extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = ['nom',  'prenom' , 'matricule','password','poste','nomSuperviseur','prenomSuperviseur','emailsuperviseur','emailadmin','departement_id'];

    public function formAccidentTravail()
   {
   // return $this->belongsToMany('App\Models\Campagne');
   return $this->belongsToMany(FormaccidentsTravail::class);
   }
   public function departements()
   {
   // return $this->belongsToMany('App\Models\Campagne');
   //return $this->belongsTo('App\Models\Usager');
   return $this->belongsTo(Departement::class);
   }
}
