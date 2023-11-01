<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;
use App\Models\proceduresTravail;


class Departement extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function usagers() : Hasmany
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->hasmany('App\Models\Usager')   ;
    }
    public function procedureTravail()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(proceduresTravail::class);
    }
}
