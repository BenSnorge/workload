<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'site_title' => 'Gym',
            'company_name' => 'Fitness',
            'hero_subtitle' => 'Become The Best Version Of Yourself',
            'hero_title' => 'Fitness for everyone',
            'hero_link' => 'Become A Member!',
            'hero_image' => 'https://images.unsplash.com/photo-1518622358385-8ea7d0794bf6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzF8fGZpdG5lc3MlMjBnaXJsfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),

        ]);
    }
}
