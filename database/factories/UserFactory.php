<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;
    $now = Carbon::now()->toDateTimeString();
    return [
        'user_name' => $faker->userName,
        'user_password' => $password ?: $password = bcrypt('1234'),
        //'user_firstname' => $faker->firstName,
        //'user_lastname' => $faker->lastName,
        'user_email' => $faker->unique()->safeEmail,
        'user_phone' => $faker->phoneNumber,
        'user_wechat_id' => str_random(6),
        'remember_token' => str_random(10),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
