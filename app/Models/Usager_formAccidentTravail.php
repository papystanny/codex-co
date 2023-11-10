<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usager_formAccidentTravail extends Model
{
    use HasFactory;
    protected $fillable = ['usager_id','formAccidentsTravail_id'];
}
