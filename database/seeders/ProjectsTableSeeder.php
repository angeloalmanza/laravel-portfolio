<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $newProject = new Project();

            $startDate = $faker->dateTimeBetween('-1 year', 'now');
            $endDate = $faker->dateTimeBetween($startDate, '+6 months');

            $newProject->name = $faker->sentence();
            $newProject->client = $faker->name();
            $newProject->start_date = $startDate->format('Y-m-d');
            $newProject->end_date = $endDate->format('Y-m-d');
            $newProject->description = $faker->paragraphs(3, true);
            $newProject->type_id = rand(1,3);

            $newProject->save();

            $technologies = Technology::inRandomOrder()->limit(2)->pluck('id')->toArray();
            // dd($technologies);
            $newProject->technologies()->sync($technologies);
        }
    }
}
