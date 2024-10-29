<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Aleksey Nikolayevich Tolstoy'],
            ['name' => 'Fyodor Dostoevsky'],
            ['name' => 'Ivan Turgenev'],
            ['name' => 'Leo Tolstoy'],
            ['name' => 'Alexander Pushkin'],

        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
