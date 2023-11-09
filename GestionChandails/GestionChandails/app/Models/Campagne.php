<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campagne extends Model
{
    use HasFactory;

    protected $fillable = ['nom','dateDebut','dateFin' , 'debutSondage', 'finSondage', 'statut', 'usager_id' ];

    public function articles()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Article::class,'campagne_articles');
    }

    public function usager()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Campagne::class,'campagnes');
    }
}


