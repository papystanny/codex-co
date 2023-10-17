<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;


    protected $fillable = ['id', 'nomEmploye', 'prenomEmploye', 'matriculeEmploye','fonctionLorsEvenement',
    'secteurActivite',  'descriptionEvenement','dateObservation', 'heureObservation' , 'temoins'  , 'ameliorationsProposees' , 'supAvise',
    'dateone' ,'nom','Signature','datetwo','temoin',
    'NoPoste','datetrois' ];


}
