<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiPeminjaman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjaman::insert(
            [
                // 'id' => 002,
                // 'id_pinjam' => 2301,
                // 'id_buku' => 3001,
                // 'id_pengurus' => 2,
                // 'tanggal_kembali' => '2022-05-19'
            ],
        );
    }
}
