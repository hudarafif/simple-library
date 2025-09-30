<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder

{
    
    public function run(): void
    {
    $books = [
        [
            'title' => 'Kambing Jantan',
            'author' => 'Raditya Dika',
            'year' => 2005
        ],
        [
            'title' => 'Cinta Brontosaurus',
            'author' => 'Raditya Dika',
            'year' => 2006
        ],
        [
            'title' => 'Marmut Merah Jambu',
            'author' => 'Raditya Dika',
            'year' => 2010
        ],
        [
            'title' => 'Manusia Setengah Salmon',
            'author' => 'Radita Dika',
            'year' => 2011
        ],
        [
            'title' => 'Makanya, Mikir!',
            'author' => 'Abigail Limuria dan Cania Citta',
            'year' => 2025
            
        ]
        ];
        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
