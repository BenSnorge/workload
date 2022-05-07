<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
            'course_img' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'course_title' => 'Class One',
            'course_p' => 'Class One',
            'course_link' => 'Book this course',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('courses')->insert([
            'course_img' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'course_title' => 'Class Two',
            'course_p' => 'Class Two',
            'course_link' => 'Book this course',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('courses')->insert([
            'course_img' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'course_title' => 'Class Three',
            'course_p' => 'Class Two',
            'course_link' => 'Book this course',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
