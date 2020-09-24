<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Emprunt;
use Faker\Generator as Faker;

$factory->define(Emprunt::class, function (Faker $faker) {
    $Adherent = App\Models\Adherent::inRandomOrder()->first();
    $book = App\Models\Book::inRandomOrder()->first();
    $random = random_int(0,100);
    if($random > 50){
        $date_rendu = $faker->dateTime();
    }
    else {
        $date_rendu = null ;
    }
    return [
        'AdherentId' => $Adherent,
        'BookId' => $book,
        'DateEmprunt' => $faker->dateTime(),  
        'RenduLe'=> $date_rendu,
        'DateRetour'=> $faker->dateTime(),
    ];
});
