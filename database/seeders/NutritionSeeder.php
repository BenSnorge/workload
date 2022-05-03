<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class NutritionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nutrition')->insert([
            'content_heading' => 'Learn About Nutrition',
            'content_p' => '',
            'content_button' => '',
            'content_image' => 'https://images.unsplash.com/photo-1497888329096-51c27beff665?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'Become A Member',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_button' => 'Join Now',
            'content_image' => 'https://images.unsplash.com/photo-1546483875-ad9014c88eba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1564&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),

        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'Become A Member',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_button' => 'Join Now',
            'content_image' => 'https://images.unsplash.com/photo-1518644961665-ed172691aaa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'Become A Member',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_button' => 'Join Now',
            'content_image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'Heading 5',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_button' => 'Join Now',
            'content_image' => 'https://images.unsplash.com/photo-1518310952931-b1de897abd40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
