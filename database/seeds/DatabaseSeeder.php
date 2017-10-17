<?php

use App\Book;
use App\Pop;
use App\HeadOffice;
use App\Store;
use App\User;
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

        Book::truncate();
        Pop::truncate();
        HeadOffice::truncate();
        Store::truncate();
        User::truncate();

        Book::flushEventListeners();
        Pop::flushEventListeners();
        HeadOffice::flushEventListeners();
        Store::flushEventListeners();
        User::flushEventListeners();

        $booksQuantity = 100;
        $popsQuantity = 100;
        $headOfficesQuantity = 10;
        $storesQuantity = 50;
        $usersQuantity = 1000;

        factory(Book::class, $booksQuantity)->create();
        factory(Pop::class, $popsQuantity)->create();
        factory(HeadOffice::class, $headOfficesQuantity)->create();
        factory(Store::class, $storesQuantity)->create();
        factory(User::class, $usersQuantity)->create();
    }
}
