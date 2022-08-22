<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WsSlides>
 */
class WsSlidesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slide_status' => $this->faker->boolean(),
        'slide_image' => $this->faker->imageUrl(),
        'slide_title' => $this->faker->sentence(),
        'slide_desc' => $this->faker->paragraph(),
        'slide_link' => $this->faker->imageUrl(),
        'slide_date' => $this->faker->date(),
        'slide_start' => $this->faker->date(),
        'slide_end' => $this->faker->date()  
        ];
    }
}
