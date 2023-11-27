<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateliermecanique extends Model
{
    protected $table = 'formateliermecaniques';
    use HasFactory;
    protected $fillable = ['numUniteImplique','departement','prenomNomEmploye','prenomNomSupImmediat','numPermisConduireEmploye','vehiculeCityonImplique'];
}
