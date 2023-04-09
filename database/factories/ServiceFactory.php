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
            'division_id'=>random_int(1,20),
           'title'=>'Service'.random_int(1,20),
           'chef'=>fake()->name(),
           'email'=>fake()->email(),
           'phone'=>fake()->phoneNumber()
        ];
    }
}
