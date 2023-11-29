<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;


class ProceduresTravail extends Model
{
    use HasFactory;

    protected $table = 'procedurestravails'; 

    protected $fillable = ['nom', 'lien'];


    public function departements()
    {
        return $this->belongsToMany(Departement::class, 'departement_procedurestravail', 'procedurestravails_id', 'departement_id');
 
    }
}
