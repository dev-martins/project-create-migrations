<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExplorePrime>
 */
class ExplorePrimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'button_label' => $this->faker->word,
            'thumbnail' => $this->faker->imageUrl(),
            'order' => $this->faker->numberBetween(1, 15),
            'enabled' => $this->faker->boolean,
            'href' => 'http://www.google.com',
        ];
    }
}
