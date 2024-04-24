<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologie = ['html','css','java script','php','mysql','vue','laravel'];
        

        foreach($technologie as $technology){

            $newTech=new Technology();

            $newTech->nome = $technology;
            $newTech->color = '#ff0000';
            $newTech->save();
        }
    }
}
