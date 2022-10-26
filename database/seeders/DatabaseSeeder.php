<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            IsiRole::class,
            IsiUser::class,
            IsiGenre::class,
            IsiDetail::class,
            IsiBookOnline::class,
            IsiFavorit::class,
            IsiHistory::class,
            IsiPinjam::class,
            IsiPeminjaman::class,
        ]);
    }
}
