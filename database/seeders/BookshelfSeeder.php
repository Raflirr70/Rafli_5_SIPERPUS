<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(('bookshelfs'))->insert([
            [
            'code' => 'BS001',
            'name' => 'Manga',
            ],
            [
            'code' => 'BS002',
            'name' => 'Manhua',
            ],
            [
            'code' => 'BS003',
            'name' => 'Manhwa',
            ],
        ]);
        Book::create([
            'title' => 'Gajah PHP',
            'author' => 'Zaler',
            'year' => '1945',
            'publisher' => 'Universitas SuryaPaloh',
            'city' => 'Water Hot',
            'cover' => 'gajahphp.jpg',
            'bookshelf_id' => 1
        ])
    }
}
