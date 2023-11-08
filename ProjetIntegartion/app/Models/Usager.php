<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
class Usager extends  Authenticatable
{
    use HasFactory , Notifiable, HasApiTokens;

    protected  $guard ='usager';
    protected $fillable = ['matricule','password','courriel'];
    protected $hidden = ['password','remember_token'];
}
