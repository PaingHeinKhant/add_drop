<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artistalbum>
 */
class ArtistalbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image'=>fake()->imageUrl,
            'title'=>fake()->title,
            'release_date' =>fake()->date(),
            'genre' => fake()->text,
            'format'=>fake()->text,
        ];
    }
}
