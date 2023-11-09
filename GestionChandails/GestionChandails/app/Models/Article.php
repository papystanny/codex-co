<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['nom','image', 'campagneActive' ];

     public function campagnes()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Campagne::class, 'campagne_articles');
    }

  
    public function couleurs()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Couleur::class, 'articles_couleur');
    }

    public function tailles()
    {
    // return $this->belongsToMany('App\Models\Campagne');
    return $this->belongsToMany(Taille::class, 'articles_taille');
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }


}
