<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('it_IT');
        
        for ( $i=0; $i<10; $i++ ) {

            $newProject = new Project();

            $newProject->name = $faker->sentence(3); 
            $newProject->client = $faker->company; 
            $newProject->period = $faker->year . '-' . $faker->year; 
            $newProject->summary = $faker->paragraph();


            $newProject->save();

        }
    }
}
