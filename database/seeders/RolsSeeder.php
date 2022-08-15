<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'name' => 'admin',
            'description' => 'Administrador del sitio'
        ]);

        DB::table('rols')->insert([
            'name' => 'teacher',
            'description' => 'Profesor de tutoria'
        ]);

        DB::table('rols')->insert([
            'name' => 'student',
            'description' => 'Estudiante general'
        ]);
    }
}
