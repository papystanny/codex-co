<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;

class Formateliermecanique extends Model
{
    protected $table = 'formateliermecaniques';
    use HasFactory;
    protected $fillable = ['numUniteImplique','departement','nomEmploye','prenomNomSupImmediat','numPermisConduireEmploye','vehiculeCityonImplique'];

     public function usagers()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Usager::class,'formateliermecanique_usager','formateliermecanique_id','usager_id');
    }
}