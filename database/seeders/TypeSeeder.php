<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = Project::all();

        for ($i = 0; $i < 10; $i++) {
            $newType = new Type();

            $newType->name = $faker->word();
            $newType->description = $faker->sentence();

            $newType->save();
        }
    }
}
