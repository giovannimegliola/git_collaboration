<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = file_get_contents(__DIR__ . '/books_db.json');
        $books = json_decode($books, true);
        foreach ($books as $book){
            $newBook = new Book();

            $newBook->title = $book['title'];
            $newBook->image = $book['thumbnailUrl'];
            $newBook->save();
        }
        //dd($books);
        // $recipes = config('db.recipes');
        // dd($recipes);
        // $houses = array_map('str_getcsv', file(__DIR__ .'/houses.csv'));
        // dd($houses);

        // foreach ($houses as $key => $house){
        //     if($key > 0){
        //         $newHouse = new House();
        //         $newHouse->image = $house[0];


        //         $newHouse->save();
        //     }

        // }

    }
}
