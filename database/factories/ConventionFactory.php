<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convention>
 */
class ConventionFactory extends Factory
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
            'title' => 'Convention'.random_int(1,10),
            'validity' => fake()->date()."-".fake()->date(),
            'budget' =>random_int(100000,100000000)."DH",
           
        ];
    }
}