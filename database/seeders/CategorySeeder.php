<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            [
                'name' => 'Entrées',
                'description' => 'Appetizers and starters to begin your meal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plats Principaux',
                'description' => 'Main courses for a fulfilling meal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desserts',
                'description' => 'Sweet treats to end your meal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Boissons',
                'description' => 'Refreshing drinks to accompany your meal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
