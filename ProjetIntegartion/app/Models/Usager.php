<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formaccidentstravail;
use App\Models\Departement;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class  Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['nom',  'prenom' , 'matricule','password','poste','nomSuperviseur','prenomSuperviseur','emailsuperviseur','emailadmin','departement_id'];

   

   public function formAccidentTravail()
   {
    return $this->belongsToMany('App\Models\Formaccidentstravail');
      // return $this->belongsToMany(Formaccidentstravail::class, 'usager_formaccidentstravail', 'usager_id', 'formAccidentsTravail_id');
   }

   public function departements()
   {
        return $this->belongsTo(Departement::class, 'departement_id');
   }
}
