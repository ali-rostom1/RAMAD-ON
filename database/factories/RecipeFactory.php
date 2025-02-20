<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2,true),
            'textContent' => fake()->paragraph(),
            'imagePath' => "/api/placeholder/400/300",
            'id_user' => User::All()->random()->id,
            'id_category' => Category::All()->random()->id,
        ];
    }
}
