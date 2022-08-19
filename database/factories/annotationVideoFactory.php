<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnnotationVideo>
 */
class AnnotationVideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'course_id' => $this->faker->numberBetween(1, 10),
            'class_id' => $this->faker->numberBetween(1, 10),
            'annotation' => $this->faker->text,
            'time_video' => $this->faker->numberBetween(0, 60),
        ];
    }
}
