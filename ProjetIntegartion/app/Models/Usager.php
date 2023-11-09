<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usagers'; // Le nom de la table dans la base de données

    protected $fillable = ['id','nom',  'prenom' , 'matricule','password','poste','droitEmploye','droitSuperieur','droitAdmin','nomSuperviseur','departement_id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

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
