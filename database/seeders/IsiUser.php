<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class IsiUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        [
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'rikiansyah.aris28@gmail.com',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()

        ],
        [
            'name' => 'rikiansyah',
            'role_id' => 1,
            'email' => 'rikiansyah.aris29@gmail.com',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()

        ],
        [
            'name' => 'erviannur',
            'role_id' => 2,
            'email' => 'erviannur01@gmail.com',
            'password' => Hash::make('user'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'user',
            'role_id' => 2,
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'created_at' => now(),
            'updated_at' => now()
        ],
    ]);


    }
}
