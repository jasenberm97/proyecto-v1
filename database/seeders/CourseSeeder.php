<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Matematicas I',
            'career_id' => 1,
        ]);

        DB::table('courses')->insert([
            'name' => 'Matematicas II',
            'career_id' => 1,
        ]);

        DB::table('courses')->insert([
            'name' => 'Matematicas III',            
            'career_id' => 1,
        ]);
    }
}
