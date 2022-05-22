<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitsPlanOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('benefits_plan_ones')->insert([
            'benefit' => ' 24 hour access to gym ',
            'icon' => 'fa-check'
        ]);
        DB::table('benefits_plan_ones')->insert([
            'benefit' => ' All classes included',
            'icon' => 'fa-check'
        ]);
        DB::table('benefits_plan_ones')->insert([
            'benefit' => ' Personal sessions with a trainer',
            'icon' => 'fa-check'
        ]);
        DB::table('benefits_plan_ones')->insert([
            'benefit' => ' Juice Bar',
            'icon' => 'fa-check'
        ]);
        DB::table('benefits_plan_ones')->insert([
            'benefit' => ' Meal Plan',
            'icon' => 'fa-check'
        ]);
        DB::table('benefits_plan_ones')->insert([
            'benefit' => ' Customized workout plan',
            'icon' => 'fa-check'
        ]);
    }
}
