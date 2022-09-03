<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'last_name' => 'admin',
            'identification' => '0000000000',
            'username' => 'admin',
            'email' => 'admin',
            'password' => Hash::make('iamputoamo'),
            'rol_id' => 1,
        ]);
    }
}
