<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommonQuestion>
 */
class CommonQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'topic' => $this->faker->name,
            'order' => $this->faker->numberBetween(1, 10),
            'enabled' => $this->faker->boolean,
        ];
    }
}
