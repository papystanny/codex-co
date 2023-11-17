<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable=[
        'nom', 
        'prenom', 
        'email',
        'password',
        'statut',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

  

    public function campagne()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Campagne::class,'campagne_articles');
    }


    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
