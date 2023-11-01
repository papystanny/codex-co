<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;


class ProceduresTravail extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'lien'];




    public function departement()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Departement::class);
    }
}
