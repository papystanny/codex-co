<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  $table->id();
             
             $table->string('nom',100);
             $table->string('prenom',100);
             $table->integer('matricule')->unique();
             $table->string('password',100);
             $table->string('poste',100);
             $table->integer('droitEmploye');
             $table->integer('droitSuperieur');
             $table->integer('droitAdmin');
             $table->string('nomSuperviseur',100)->nullable();
             $table->foreignId('departement_id')->constrained();
     */
    public function run(): void
    {
         DB::table('usagers')->insert([
            [
                'id' => 1,
                'nom' => 'Pepin',
                'prenom' => 'Marc',
                'matricule' => 123456,
                'password' => Hash::make('fifi12'),
                'poste' => 'journalier TP',
                'nomSuperviseur' => 'Reid',
                'prenomSuperviseur' => 'clay',
                'emailsuperviseur' => 'fmatho@yahoo.com',
                'emailadmin' => 'francinematho17@gmail.com',
                'departement_id' => 1,
                'typeCompte' => 'employe',
            ],
            [
                'id' => 2,
                'nom' => 'Reid',
                'prenom' => 'Clay',
                'matricule' => 133456,
                'password' =>Hash::make('fifi13') ,
                'poste' => 'journalier TP',
                'nomSuperviseur' => ' ',
                'prenomSuperviseur' => '',
                'emailsuperviseur' => '',
                'emailadmin' => 'francinematho17@gmail.com',
                'departement_id' => 1,
                'typeCompte' => 'superieur',
            ],
            [
                'id' => 3,
                'nom' => 'Temps',
                'prenom' => 'Paul',
                'matricule' => 143456,
                'password' => Hash::make('fifi14'),
                'poste' => 'journalier TP',
                'nomSuperviseur' => ' Reid',
                'prenomSuperviseur' => 'Clay',
                'emailsuperviseur' => 'fmatho@yahoo.com',
                'emailadmin' => 'francinematho17@gmail.com',
                'departement_id' => 1,
                'typeCompte' => 'employe',
            ],
            [
                'id' => 4,
                'nom' => 'admin',
                'prenom' => 'admin',
                'matricule' => 153456,
                'password' =>Hash::make('fifi15'),
                'poste' => 'Cheffe dequipe',
                'nomSuperviseur' => '',
                'prenomSuperviseur' => '',
                'emailsuperviseur' => '',
                'emailadmin' => 'francinematho17@gmail.com',
                'departement_id' => 1,
                'typeCompte' => 'admin',
            ],

         ]);
    }
}