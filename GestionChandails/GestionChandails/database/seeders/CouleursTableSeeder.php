<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouleursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('couleurs')->insert([
            [
                'nom'=>'Noir',
                'hexcode'=>'#000000',
            ],
            [
                'nom'=>'Blanc',
                'hexcode'=>'#FFFFFF',
            ],
            [
                'nom'=>'Indigo',
                'hexcode'=>'#4B0082',
            ],
            [
                'nom'=>'Bleu',
                'hexcode'=>'#0000FF',
            ],
            [
                'nom'=>'Fluo',
                'hexcode'=>'#00FF00',
            ],
            [
                'nom'=>'Vert',
                'hexcode'=>'#008000',
            ],
            [
                'nom'=>'Orange',
                'hexcode'=>'#FFA500',
            ],
            [
                'nom'=>'Onyx',
                'hexcode'=>'#0F0F0F',
            ],
            [
                'nom'=>'Gris',
                'hexcode'=>'#808080',
            ],
            [
                'nom'=>'Marron',
                'hexcode'=>'#800000',
            ],
            [
                'nom'=>'Beige',
                'hexcode'=>'#F5F5DC',
            ],
            [
                'nom'=>'Bougorgne',
                'hexcode'=>'#800000',
            ],
            [
                'nom'=>'Bleu Turquoise',
                'hexcode'=>'#40E0D0',
            ]
         ]);
    }
}
