<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\partenaires_convention>
 */
class partenaires_conventionFactory extends Factory
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
            'id_convention'=>random_int(1,20),
            'id_partenaire'=>random_int(1,20),
        ];
    }
}
