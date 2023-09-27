<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  $table->id();
             
    */
    public function run(): void
    {
         DB::table('usagers')->insert([
            [
                'id' => 1,
                'nom' => 'Pepin',
                'prenom' => 'Marc',
                'matricule' => 123456,
                'password' => 'fifi12',
                'poste' => 'journalier TP',
                'droitEmploye' => 1,
                'droitSuperieur' => 0,
                'droitAdmin' => 0,
                'nomSuperviseur' => 'Jane Dow',
                'departement_id' => 1,
            ],
            [
                'id' => 2,
                'nom' => 'Reid',
                'prenom' => 'Claudine',
                'matricule' => 133456,
                'password' => 'fifi13',
                'poste' => 'journalier TP',
                'droitEmploye' => 1,
                'droitSuperieur' => 0,
                'droitAdmin' => 0,
                'nomSuperviseur' => 'Jane Dow',
                'departement_id' => 1,
            ],
            [
                'id' => 3,
                'nom' => 'Temps',
                'prenom' => 'Paul',
                'matricule' => 143456,
                'password' => 'fifi14',
                'poste' => 'journalier TP',
                'droitEmploye' => 1,
                'droitSuperieur' => 0,
                'droitAdmin' => 0,
                'nomSuperviseur' => 'Jane Dow',
                'departement_id' => 1,
            ],
            [
                'id' => 4,
                'nom' => 'daw',
                'prenom' => 'Jane',
                'matricule' => 153456,
                'password' => 'fifi15',
                'poste' => 'Cheffe dequipe',
                'droitEmploye' => 1,
                'droitSuperieur' => 1,
                'droitAdmin' => 0,
                'nomSuperviseur' => 'Jonathan Morinville',
                'departement_id' => 1,
            ],

         ]);
    }
}
