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
            'password' => Hash::make('password'),
            'rol_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'JoseEstudia',
            'last_name' => 'default',
            'identification' => '0000000001',
            'username' => 'estudiante',
            'email' => 'esyduante@mail.com',
            'password' => Hash::make('password'),
            'rol_id' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'JoseProfe',
            'last_name' => 'default',
            'identification' => '0000000002',
            'username' => 'profesor',
            'email' => 'profesor@mail.com',
            'password' => Hash::make('password'),
            'rol_id' => 2,
        ]);
    }
}
