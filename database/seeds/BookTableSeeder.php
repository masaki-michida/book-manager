<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();

        $books = [
            ['name'=>'PHP Book',
             'price'=>2000,
             'author'=>'phper'
            ],
            ['name'=>'Laravel',
             'price'=>3000,
             'author'=>'Matz'
            ],
            ['name'=>'ruby',
             'price'=>1500,
             'author'=>'itou'
            ]
        ];
        foreach($books as $book){
            \App\Book::create($book);
        }
    }
}
