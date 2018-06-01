<?php
use Faker\Generator as Faker;
use Carbon\Carbon;
use App\Models\Role;
$factory -> define(Role::class, function (Faker $faker){
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'name'         => $faker -> unique() -> jobTitle,
        'display_name' => $faker -> unique() -> jobTitle,
        'created_at'   => $now,
        'updated_at'   => $now,
    ];
});
