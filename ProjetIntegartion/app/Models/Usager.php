<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormaccidentsTravail;
use App\Models\Formulairesauditsst;
use App\Models\Formsitdangereuse;
use App\Models\Formateliermecanique;
use App\Models\Departement;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class  Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable =  ['nom',  'prenom' , 'matricule','password','poste','nomSuperviseur','prenomSuperviseur','emailsuperviseur','emailadmin','departement_id'];


   

    public function formAccidentTravail()
   {
       return $this->belongsToMany(FormaccidentsTravail::class, 'formaccidentstravail_usager', 'usager_id', 'formaccidentstravail_id');
   }
 
   public function formulairesauditssts()
   {
       return $this->belongsToMany(Formulairesauditsst::class, 'formulairesauditsst_usager', 'usager_id', 'formulairesauditsst_id');
   }
 
   public function formulairessitdangeureuse()
   {
       return $this->belongsToMany(Formsitdangereuse::class, 'formSitDangereuse_usager', 'usager_id', 'formSitDangereuse_id');
   }
 
   public function formulairesateliermecanique()
   {
       return $this->belongsToMany(Formateliermecanique::class, 'formateliermecanique_usager', 'usager_id', 'formateliermecanique_id');
   }
 
 
   public function departements()
   {
        return $this->belongsTo(Departement::class, 'departement_id');
   }
}
