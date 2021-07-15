<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\Brand;
use App\Subcategory;

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(Item::class, function (Faker $faker) {
    // width, height
    $photo = $faker->image();
    $imageFile = new File($photo);

    return [
        'codeno' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'name' => $faker->word(),
        'photo' => Storage::disk('public')->putFile('itemimg',$imageFile),
        'price' => $faker->numberBetween($min = 1000, $max = 9000),
        'discount' => $faker->numberBetween($min = 1000, $max = 9000),
        'description' => $faker->text($maxNbChars = 200),
        'brand_id' => Brand::all(['id'])->random(),
        'subcategory_id' => Subcategory::all(['id'])->random(),
    ];
});
