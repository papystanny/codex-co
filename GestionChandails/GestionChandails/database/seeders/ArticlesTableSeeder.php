<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'id' => 1,
                'nom' => 'Kangourou',            
                'image' => 'https://pwco.com.sg/wp-content/uploads/2020/05/Generic-Profile-Placeholder-v3-1536x1536.png'
            ],
            [
                'id' => 2,
                'nom' => 'T-Shirt',
                'image' => 'https://pwco.com.sg/wp-content/uploads/2020/05/Generic-Profile-Placeholder-v3-1536x1536.png'
            ],
            [
                'id' => 3,
                'nom' => 'Casquette',
                'image' => 'https://pwco.com.sg/wp-content/uploads/2020/05/Generic-Profile-Placeholder-v3-1536x1536.png'
            ],
            [
                'id' => 4,
                'nom' => 'Bouteille',
                'image' => 'https://pwco.com.sg/wp-content/uploads/2020/05/Generic-Profile-Placeholder-v3-1536x1536.png'
            ],
            [
                'id' => 5,
                'nom' => 'Porte-clé',
                'image' => 'https://pwco.com.sg/wp-content/uploads/2020/05/Generic-Profile-Placeholder-v3-1536x1536.png'
            ]
        ]);
    }
}
