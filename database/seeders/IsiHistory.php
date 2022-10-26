<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiHistory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        History::insert(
            [
                // 'id' => 003,
                // 'id_anggota' => 03,
                // 'nama_buku' => 'Bumi'
            ],
        );
    }
}
