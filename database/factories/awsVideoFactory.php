<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AwsVideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url' => $this->faker->url(),
            'url_signed' => $this->faker->url(),
            'thumbnail_url' => $this->faker->url(),
            'duration_in_seconds' => $this->faker->numberBetween(0, 60)
        ];
    }
}
