<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        return [
            'title' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'slug' => Str::slug(fake()->sentence($nbWords = 6, $variableNbWords = true), "-"),
            'contenu' => fake()->paragraph($nbSentences = 20, $variableNbSentences = true),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
