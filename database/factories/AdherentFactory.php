<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Adherent;
use Faker\Generator as Faker;
$factory->define(Adherent::class, function (Faker $faker) {
    return [
        'Nom' => $faker->lastName,
        'Prenom' => $faker->firstName,
        'Email' => $faker->unique()->safeEmail,
        'Tel' => $faker->unique()->e164PhoneNumber,
        'created_at' => $faker->dateTimeBetween('-4 years', '-6 months'),
    ];
});