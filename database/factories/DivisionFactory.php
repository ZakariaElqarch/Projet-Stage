<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Division>
 */
class DivisionFactory extends Factory
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
           'title'=>'Division'.random_int(1,10),
           'chef'=>fake()->name(),
           'email'=>fake()->email(),
           'phone'=>fake()->phoneNumber()
        ];
    }
}
