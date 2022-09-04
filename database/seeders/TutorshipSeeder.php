<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutorships')->insert([
            'theme' => 'Matematicas I',
            'place' => '206',
            'date' => 'Martes',
            'start_time' => '10:00 AM',
            'end_time' => '13:00 PM',
            'max_students' => 40,
            'course_id' => 1,
            'teacher_id' => 2,
            'faculty_id' => 1,
            'career_id' => 1,
        ]);
    }
}
