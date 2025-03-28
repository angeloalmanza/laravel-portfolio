<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = ['Software', 'Hardware', 'Marketing'];

        foreach($types as $type){
            $newType = new Type();

            $newType->name = $type;
            $newType->description = $faker->paragraphs(3, true);

            $newType->save();
        }
    }
}
