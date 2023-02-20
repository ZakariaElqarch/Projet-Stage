<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
           'id_convention'=>random_int(1,10),
      'title'=>'Projet'.random_int(1,10),
      'validationDate'=>fake()->date()."-".fake()->date(),
      'budget'=>random_int(100000,100000000)."DH",
      'phase'=>'phase'.random_int(1,3), 
    'progress'=>random_int(1,100)
     

        ];
    }
}
