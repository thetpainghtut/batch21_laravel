<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class,2)->create()->each(function ($category) {

            // Seed the relation with 5 subcategories
            $subcategories = factory(Subcategory::class, 2)->make();
            $category->subcategories()->saveMany($subcategories);
        });
    }
}
