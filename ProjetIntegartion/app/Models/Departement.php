<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = ['nom','procedureTravail'];

    public function usagers() : Hasmany
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->hasmany('App\Models\Usager')   ;
    }
}