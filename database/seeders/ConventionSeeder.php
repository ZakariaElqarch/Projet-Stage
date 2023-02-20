<?php

namespace Database\Seeders;

use App\Models\Convention;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Convention::factory()->count(10)->create();
       
    }
    
}
