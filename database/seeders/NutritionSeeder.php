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
            'content_image' => 'https://images.unsplash.com/photo-1497888329096-51c27beff665?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'Why nutrition is so important',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa numquam neque veniam debitis ipsam commodi perspiciatis adipisci fugiat fuga sequi repellat, doloremque deleniti voluptatem voluptates? Explicabo temporibus voluptatum nulla, minima quod eius optio nostrum! Officiis, dolores inventore! Facere dolorem voluptates totam excepturi nam ut? Consectetur, maxime? Quas nihil ipsam obcaecati.',
            'content_image' => '',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),

        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'We offer classes on nutrition',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_image' => 'https://images.unsplash.com/photo-1610348725531-843dff563e2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'How is this helping with your goals?',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_image' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'A customized meal plan',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1706&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('nutrition')->insert([
            'content_heading' => 'Healthy fuel for your body',
            'content_p' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.',
            'content_image' => 'https://images.unsplash.com/photo-1494390248081-4e521a5940db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1612&q=80',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
