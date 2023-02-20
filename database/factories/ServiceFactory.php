<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
            'id_division'=>random_int(1,10),
           'titre'=>'Service'.random_int(1,10),
           'chef'=>fake()->name(),
           'email'=>fake()->email(),
           'tel'=>fake()->phoneNumber()
        ];
    }
}
