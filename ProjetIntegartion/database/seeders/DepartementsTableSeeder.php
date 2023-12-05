<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('departements')->insert([
            [
                'id' => 1,
                'nom' => 'Direction Generale',            
              
            ],
            [
                'id' => 2,
                'nom' => 'Approvisionnement',            
                
            ],
            [
                'id' => 3,
                'nom' => 'Communications et participation citoyenne',            
               
            ],
            [
                'id' => 4,
                'nom' => 'Finances',            
              
            ],
            [
                'id' => 5,
                'nom' => 'greffe,gestion des documents et archives',            
             
            ],
            [
                'id' => 6,
                'nom' => 'ressources humaines',            
              
            ],
            [
                'id' => 7,
                'nom' => 'amenagement et developpement durable',           
               
            ],
            [
                'id' => 8,
                'nom' => 'bureau de projet et des actifs',           
               
            ],
            [
                'id' => 9,
                'nom' => 'évaluation',            
              
            ],
            [
                'id' => 10,
                'nom' => 'genie',            
                
            ],
            [
                'id' => 11,
                'nom' => 'technologie de l information',           
              
            ],
            [
                'id' => 12,
                'nom' => 'culture,loisirs et vie communautaire',          
              
            ],
            [
                'id' => 13,
                'nom' => 'Gestion des eaux et des immeubles',            
                
            ],
            [
                'id' => 14,
                'nom' => 'police',           
                
            ],
            [
                'id' => 15,
                'nom' => 'securite incendie et securite civile',          
                
            ],
            [
                'id' => 16,
                'nom' => 'services juridiques',           
               
            ],
            [
                'id' => 17,
                'nom' => 'Travaux publics',          
               
            ],
        ]);	
        //
    }
}