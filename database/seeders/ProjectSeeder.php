<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for($i=0; $i < 10 ; $i++){

            $newProject = new Project();

            $newProject->name=$faker->jobTitle();
            $newProject->username_creator="xClevion";
            $newProject->link_github = "https://github.com/AndreaLivornese";
            $newProject->program_langs= null;
            $newProject->img = null;

            $newProject->save();

        }




    }
}
