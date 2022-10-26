<?php

namespace Database\Seeders;

use App\Models\Favorit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiFavorit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Favorit::insert(
            [
                // 'id' => 004,
                // 'id_buku' => 3002,
                // 'id_anggota' => 004
            ],
        );
    }
}
