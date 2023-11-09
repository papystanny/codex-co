<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taille extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'campagneActive'];

    
    public function articles()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Article::class, 'articles_taille');
    }
}
