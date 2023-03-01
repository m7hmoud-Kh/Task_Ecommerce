<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $image = ['p1.jpg','p2.jpg','p3.jpg'];
        for ($i=0; $i <12 ; $i++) {
            $name = $faker->unique()->sentence(2);
            Product::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $faker->paragraph(),
                'price' => $faker->numberBetween(5, 300),
                'quatity' => $faker->numberBetween(10, 200),
                'status' => true,
                'image' => $image[rand(0, count($image)-1)]
            ]);
        }
    }
}
