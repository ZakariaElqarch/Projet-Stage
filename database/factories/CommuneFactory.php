<?php

namespace Database\Factories;

use Faker\Provider\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commune>
 */
class CommuneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
           'titre'=>'Commune'.random_int(1,10),
           'email'=>fake()->unique()->safeEmail(),
           'tel'=>fake()->PhoneNumber(),
        ];
    }
}
