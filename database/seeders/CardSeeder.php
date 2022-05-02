<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'card1_icon' => 'fa-solid fa-clock',
            'card1_heading' => '24 Hours',
            'card1_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, delectus maiores enim aut assumenda at labore facere nobis ipsam aliquam? Illo repudiandae exercitationem harum in?',
            'card2_icon' => 'fa-solid fa-dumbbell',
            'card2_heading' => 'Trainers',
            'card2_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, delectus maiores enim aut assumenda at labore facere nobis ipsam aliquam? Illo repudiandae exercitationem harum in?',
            'card3_icon' => 'fa-solid fa-utensils',
            'card3_heading' => 'Nutrition',
            'card3_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, delectus maiores enim aut assumenda at labore facere nobis ipsam aliquam? Illo repudiandae exercitationem harum in?',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
