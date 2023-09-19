<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;

class UsagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    DB::table('usagers')->insert([
        [
            'id'=>'1',
            'password'=>Hash::make('fifi12')
            
        ]
    ]);

    }
}

