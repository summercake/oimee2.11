<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Permission::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        'key' => $faker->jobTitle,
        'table_name' => $faker->jobTitle,
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
