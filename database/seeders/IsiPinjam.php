<?php

namespace Database\Seeders;

use App\Models\Pinjam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiPinjam extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pinjam::insert(
            [
                // 'id' => 001,
                // 'tanggal_pinjam' => '2022-05-12',
                // 'ID_Anggota' => 01,
                // 'ID_pengurus' => 1
            ],
        );
    }
}
