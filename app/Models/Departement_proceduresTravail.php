<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement_proceduresTravail extends Model
{
    use HasFactory;
    protected $fillable = ['departement_id', 'procedurestravail_id' ];
}
