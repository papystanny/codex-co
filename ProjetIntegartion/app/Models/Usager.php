<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usagers'; // Le nom de la table dans la base de données

    protected $fillable=[
        'id', 
        'nom', 
        'prenom',
        'matricule',
        'password',

        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
