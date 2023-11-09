<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'usager_id',
        'campagne_id',
        'nom_article',
        'couleur_article',
        'taille_article',
        'quantite',
        'statut',
        'etat',
        
        
    ];
    protected $dates = ['date'];
  
    // Relation avec la table Article
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
 
}