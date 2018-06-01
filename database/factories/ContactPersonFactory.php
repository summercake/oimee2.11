<?php
use Faker\Generator as Faker;
use Carbon\Carbon;
use App\Models\Contact_person;

$factory -> define(Contact_person::class, function (Faker $faker){
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'contact_person_firstname'  => $faker -> firstname,
        'contact_person_lastname'   => $faker -> lastname,
        'contact_person_email'      => $faker -> unique() -> safeEmail,
        'contact_person_phone'      => $faker -> phoneNumber,
        'contact_person_weachat_id' => str_random(6),
        'created_at'                => $now,
        'updated_at'                => $now,
    ];
});
