<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiGenre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
        [
            'id' => 101,
            'nama_genre' => 'Action',
        ],
        [
            'id' => 102,
            'nama_genre' => 'Comedy',
        ],
        [
            'id' => 103,
            'nama_genre' => 'Horor',
        ],
        [
            'id' => 104,
            'nama_genre' => 'Romance',
        ],
        [
            'id' => 105,
            'nama_genre' => 'Fiksi',
        ],
        [
            'id' => 106,
            'nama_genre' => 'Thriller',
        ],
    ]);
    }
}
