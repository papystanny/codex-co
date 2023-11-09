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
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [               
                'statut' => 1,
                'nom' => 'superAdmin',
                'prenom' => 'superAdmin',
                'email' => 'superadmin@cegep3r.info',
                'password' => Hash::make('root'),
            ],
            [
                'statut' => 3,
                'nom' => 'stan',
                'prenom' => 'pharel',
                'email' => 'stan@cegep3r.info',
                'password' => Hash::make('stan'),
            ],
            [
                'statut'=>2,
                'nom'=>'Alex',
                'prenom' => 'sophie',
                'email'=>'alexfortin@cegep3r.info',
                'password'=>Hash::make('Maman33/'),
            ]

        ]);
    }
}
