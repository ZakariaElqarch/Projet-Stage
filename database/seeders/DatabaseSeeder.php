<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Commune;
use App\Models\Convention;
use App\Models\conventions_communes;
use App\Models\Division;
use App\Models\Partenaire;
use App\Models\Partenaires_convention;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Commune::factory()->count(20)->create();
        Partenaire::factory()->count(20)->create();
        Division::factory()->count(20)->create();
        Service::factory()->count(20)->create();
        Convention::factory()->count(20)->create();
        Project::factory()->count(20)->create();
        conventions_communes::factory()->count(20)->create();
        Partenaires_convention::factory()->count(20)->create();


    }
}
