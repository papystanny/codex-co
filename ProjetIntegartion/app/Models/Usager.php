<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;

class Usager extends Authenticatable
{
    use Notifiable , HasFactory , HasApiTokens ;

    protected $guard = 'usager';
    protected $fillable = ['matricule','password'];
    protected $hidden = ['password','remember_token'];



     // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];


    
// public  function getauthPassword()
// {
//     return $this->password()
// };

}
