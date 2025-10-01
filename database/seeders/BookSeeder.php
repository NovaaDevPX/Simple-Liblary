<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title'  => 'Clean Code',
                'author' => 'Robert C. Martin',
                'year'   => 2008,
            ],
            [
                'title'  => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt',
                'year'   => 1999,
            ],
            [
                'title'  => 'Design Patterns',
                'author' => 'Erich Gamma',
                'year'   => 1994,
            ],
            [
                'title'  => 'Refactoring',
                'author' => 'Martin Fowler',
                'year'   => 1999,
            ],
            [
                'title'  => 'Code Complete',
                'author' => 'Steve McConnell',
                'year'   => 2004,
            ],
            [
                'title'  => 'Domain-Driven Design',
                'author' => 'Eric Evans',
                'year'   => 2003,
            ],
            [
                'title'  => 'Patterns of Enterprise Application Architecture',
                'author' => 'Martin Fowler',
                'year'   => 2002,
            ],
            [
                'title'  => 'Working Effectively with Legacy Code',
                'author' => 'Michael Feathers',
                'year'   => 2004,
            ],
            [
                'title'  => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen',
                'year'   => 2009,
            ],
            [
                'title'  => 'Head First Design Patterns',
                'author' => 'Eric Freeman',
                'year'   => 2004,
            ],
        ];

        foreach ($books as $book) {
            Books::create($book);
        }
    }
}
