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
use App\Modules\Event\Event;
use App\User;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'is_active' => 1,
    ];
});

$factory->define(Event::class, function (Faker\Generator $faker) {
    $start_date = \Carbon\Carbon::now()->addDays($faker->randomElement([1,2,3,4,5,6,7,8,9,10]));
    $end_date = $start_date->copy()->addDays($faker->randomElement([1,2,3,4,5,6,7,8,9,10]));
    $title = $faker->sentence(5);
    $uuid = uniqid(time());
    return [
        'title' => $title,
        'description' => $faker->paragraph(80),
        'address' => $faker->address,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'start_date' => $start_date->format('Y-m-d'),
        'end_date' => $end_date->format('Y-m-d'),
        'slug' => \Illuminate\Support\Str::slug($title) . '-' . $uuid,
        'user_id' => factory(User::class)->create([
            'password' => bcrypt('password'),
        ])->id,
    ];
});