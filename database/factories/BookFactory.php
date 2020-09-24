<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Book;
use Faker\Generator as Faker;
$factory->define(Book::class, function (Faker $faker) {
    return [
        'Titre' => $faker->sentence(3),
        'ISBN' => $faker->randomNumber($nbDigits = 5, $strict = false),
        'Auteur' => $faker->lastName." ".$faker->firstName,
        'Image' => strval(mt_rand(1, 10)) . '.jpg',
    ];
});