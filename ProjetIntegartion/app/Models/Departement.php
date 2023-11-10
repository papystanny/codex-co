<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usager;
use App\Models\ProceduresTravail;


class Departement extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function usagers(): hasMany
    {
        return $this->hasMany(Usager::class, 'departement_id', 'id');
    }

    public function proceduresTravails()
    {
        return $this->belongsToMany(ProceduresTravail::class, 'departement_procedurestravail', 'departement_id', 'procedurestravails_id');
    }
}
