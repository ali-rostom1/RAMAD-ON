<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipe')->insert([
            [
                'textContent' => 'Une soupe marocaine traditionnelle parfaite pour l\'iftar, riche en légumes et en légumineuses.',
                'imagePath' => '/api/placeholder/400/300',
                'id_user' => 1, 
                'id_category' => 9, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'textContent' => 'Crêpes feuilletées marocaines servies avec du miel et du beurre fondu.',
                'imagePath' => '/api/placeholder/400/300',
                'id_user' => 1, 
                'id_category' => 10, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'textContent' => 'Boisson rafraîchissante et énergétique pour le suhoor, préparée avec des dattes fraîches.',
                'imagePath' => '/api/placeholder/400/300',
                'id_user' => 1, 
                'id_category' => 11, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
