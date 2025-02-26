<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Canton>
 */
class CantonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Canton Sabana San Juan Abajo',
                'Canton Sabana San Juan Arriba',
                'Canton El Almendro',
                'Los Arenales']),
            'status' => 1
        ];
    }
}
