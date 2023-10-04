<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;


    protected $fillable = ['id', 'nomEmploye', 'prenomEmploye', 'matriculeEmploye','fonctionLorsEvenement',
    'secteurActivite', 'dateObservation', 'heureObservation' , 'temoins' , 'descriptionEvenement' , 'ameliorationsProposees' , 'supAvise' ,'nomSuperviseur' , 'dateSupeAvise' , 'signatureEmploye'
, 'dateSignatureEmploye','signatureSuperviseur' , 'dateSignatureSuperviseur','numPosteSuperviseur', 'notifSup' , 'notifAdmin'];


}
