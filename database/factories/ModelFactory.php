<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Cars\Manufacturer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company
    ];
});

$factory->define(App\Models\Cars\CarModel::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'manufacturer_id' => function() {
        	return factory(App\Models\Cars\Manufacturer::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\Cars\Car::class, function (Faker\Generator $faker) {
    return [
        'manufacturer_id' => function() {
        	return factory(App\Models\Cars\Manufacturer::class)->create()->id;
        },
        'car_model_id' => function() {
        	return factory(App\Models\Cars\CarModel::class)->create()->id;
        },
        'horsepower' => $faker->numberBetween(60, 140),
        'ugliness' => $faker->numberBetween(1, 10),
        'car_picture_path' => $faker->imageUrl(640, 480, 'transport'),
    ];
});