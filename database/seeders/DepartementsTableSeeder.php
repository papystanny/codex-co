<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'procedureTravail' => '',
            ],
            [
                'id' => 2,
                'nom' => 'Approvisionnement',            
                'procedureTravail' => '',
            ],
            [
                'id' => 3,
                'nom' => 'Communications et participation citoyenne',            
                'procedureTravail' => '',
            ],
            [
                'id' => 4,
                'nom' => 'Finances',            
                'procedureTravail' => '',
            ],
            [
                'id' => 5,
                'nom' => 'greffe,gestion des documents et archives',            
                'procedureTravail' => '',
            ],
            [
                'id' => 6,
                'nom' => 'ressources humaines',            
                'procedureTravail' => '',
            ],
            [
                'id' => 7,
                'nom' => 'amenagement et developpement durable',           
                'procedureTravail' => '',
            ],
            [
                'id' => 8,
                'nom' => 'bureau de projet et des actifs',           
                'procedureTravail' => '',
            ],
            [
                'id' => 9,
                'nom' => 'évaluation',            
                'procedureTravail' => '',
            ],
            [
                'id' => 10,
                'nom' => 'genie',            
                'procedureTravail' => '',
            ],
            [
                'id' => 11,
                'nom' => 'technologie de l information',           
                'procedureTravail' => '',
            ],
            [
                'id' => 12,
                'nom' => 'culture,loisirs et vie communautaire',          
                'procedureTravail' => '',
            ],
            [
                'id' => 13,
                'nom' => 'Gestion des eaux et des immeubles',            
                'procedureTravail' => '',
            ],
            [
                'id' => 14,
                'nom' => 'police',           
                'procedureTravail' => '',
            ],
            [
                'id' => 15,
                'nom' => 'securite incendie et securite civile',          
                'procedureTravail' => '',
            ],
            [
                'id' => 16,
                'nom' => 'services juridiques',           
                'procedureTravail' => '',
            ],
            [
                'id' => 17,
                'nom' => 'Travaux publics',          
                'procedureTravail' => '',
            ],
        ]);	
        //
    }
}
