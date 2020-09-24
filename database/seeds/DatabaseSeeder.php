<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\Models\User::class,5)->create();
        $book = factory(App\Models\Book::class,100)->create();
        $adherent = factory(App\Models\Adherent::class,40)->create();
        $emprunts = factory(App\Models\Emprunt::class,10)->create();
    }
}