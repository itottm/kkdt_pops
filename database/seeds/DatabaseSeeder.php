<?php

use App\User;
use App\Book;
use App\Pop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Book::truncate();
        Pop::truncate();

        User::flushEventListeners();
        Book::flushEventListeners();
        Pop::flushEventListeners();

        $usersQuantity = 1000;
        $booksQuantity = 100;
        $popsQuantity = 100;

        factory(User::class, $usersQuantity)->create();
        factory(Book::class, $booksQuantity)->create();
        factory(Pop::class, $popsQuantity)->create();
    }
}
