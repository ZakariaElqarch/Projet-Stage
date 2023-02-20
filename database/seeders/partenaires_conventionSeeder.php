<?php

namespace Database\Seeders;

use App\Models\partenaires_convention;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class partenaires_conventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        partenaires_convention::factory()->count(30)->create();
    }
}
