<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Career;
use App\Models\Faculty;
use App\Models\Tutorship;
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
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RolsSeeder::class,
            UsersSeeder::class,
            FacultySeeder::class,
            CareerSeeder::class,
            CourseSeeder::class,
            TutorshipSeeder::class,
            ResourceSeeder::class, 
            LessonSeeder::class,
        ]);
    }
}
