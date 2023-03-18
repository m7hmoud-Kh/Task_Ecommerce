<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        // SubCategory
        for ($i = 0; $i < 5; $i++) {
            $name = $faker->unique()->sentence(2);
            Category::create([
                'name' => $name,
            ]);
        }
    }
}
