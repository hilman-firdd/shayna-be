<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $title = $faker->sentence;
    $slug = str_slug($title, '-');

    return [
        'name' => $faker->name(),
        'slug' => $slug,
        'type' => $title,
        'description' => $faker->paragraph,
        'price' => $faker->randomDigit,
        'quantity' => $faker->unique()->numberBetween(1,20)
    ];
});
