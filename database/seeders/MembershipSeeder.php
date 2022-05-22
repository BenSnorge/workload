<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memberships')->insert([
            'membership_img' => 'https://images.unsplash.com/photo-1518459031867-a89b944bffe4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2882&q=80',
            'membership_heading' => 'Become A Member',
            'membership_plan' => '',
            'membership_btn' => '',
            'membership_description' => 'You can book classes or trainer sessions on our basic plan in the membership area. Fees for each class will be $15 and each session $40',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('memberships')->insert([
            'membership_img' => '',
            'membership_heading' => '',
            'membership_plan' => 'Pro',
            'membership_price' => '$800',
            'membership_btn' => 'Sign Up',
            'membership_description' => '',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),

        ]);
        DB::table('memberships')->insert([
            'membership_img' => '',
            'membership_heading' => '',
            'membership_plan' => 'Basic',
            'membership_price' => '$40',
            'membership_btn' => 'Sign Up',
            'membership_description' => '',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),

        ]);
    }
}
