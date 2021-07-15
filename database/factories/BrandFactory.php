<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(Brand::class, function (Faker $faker) {
    // width, height
    $photo = $faker->image();
    $imageFile = new File($photo);

    return [
        'name' => $faker->word(),
        'photo' => Storage::disk('public')->putFile('brandimg',$imageFile),
    ];
});
