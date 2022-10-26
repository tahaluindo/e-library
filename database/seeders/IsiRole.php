<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class IsiRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
