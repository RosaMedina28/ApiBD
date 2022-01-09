<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class perroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'Raza' => $this->faker->randomElement(['Labrador', 'Pastor', 'Pomerania', 'Golden', 'Pitbull', 'Chihuahua', 'Shiba', 'Pug', 'Rottweiler', 'Shih Tzu', 'Chow Chow', 'Boxer', 'Bulldog']),
            'Edad' => rand(1, 20),
            'Color' => $this->faker->randomElement(['Cafe', 'gris', 'negro', 'blanco']),
            'Tamaño' => $this->faker->randomElement(['Chico', 'Mediano', 'Grande'])
        ];
    }
}
