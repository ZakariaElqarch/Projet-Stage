<?php

namespace Database\Seeders;

use App\Models\conventions_communes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class conventions_communesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        conventions_communes::factory()->count(30)->create();
    }
}
