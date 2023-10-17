<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormMec extends Model
{
    use HasFactory;

    protected $fillable = ['reponseone','reponsetwo','reponsetrois','reponsequatre','reponsecinq','oui','non'];
}
