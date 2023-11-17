<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tailles')->insert([
            [
                'nom'=>'S'
            ],
            [
                'nom'=>'M'
            ],
            [
                'nom'=>'L'
            ],
            [
                'nom'=>'XL'
            ],
            [
                'nom'=>'XXL'
            ],
            
        ]);
    }
}
