<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Utilisateur extends Authenticatable
{
    use Notifiable;

    protected $guard = 'utilisateur';
    protected $fillable = ['matricule','password'];
    protected $hidden = ['password','remember_token'];




    
public  function getauthPassword()
{
    return $this->password();
}

}



