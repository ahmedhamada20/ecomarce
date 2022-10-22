<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\SubCategory;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        DB::table('sub_categories')->truncate();

        for ($i = 0; $i <= 7; $i++) {
            Category::create([
                'name' => $faker->name,
                'notes' => $faker->name,
            ]);
        }

        for ($i = 0; $i <= 10; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".jpg",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\Category'
            ]);
        }

        
        for ($i = 0; $i <= 50; $i++) {
            SubCategory::create([
                'name' => $faker->name,
                'notes' => $faker->name,
                'category_id'=> rand(1,3)
            ]);
        }

        for ($i = 0; $i <= 10; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".jpg",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\SubCategory'
            ]);
        }
        
        for ($i = 0; $i <= 80; $i++) {
            Product::create([
                'name' => $faker->name,
                'notes' => $faker->paragraph,
                'price'=> 25000,
                'quantity'=> $faker->numberBetween(1000000,2000000),
                'category_id'=> rand(1,3),
                'sub_category_id'=> rand(1,3),
                'days'=>rand(100,600),
                'life_cycle'=>$faker->name,
                'disease'=>$faker->name,
                'hybrid'=>$faker->name,
                'section_one'=>$faker->paragraph,
                'section_two'=>$faker->paragraph,
                'section_there'=>$faker->paragraph,
            ]);
        }

        for ($i = 0; $i <= 80; $i++) {
            Photo::insert([
                'Filename'     => rand(1,9) . ".jpg",
                'photoable_id' => rand(1,80),
                'photoable_type' => 'App\Models\Product'
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
