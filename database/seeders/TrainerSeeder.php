<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'trainer_img' => 'https://images.unsplash.com/photo-1597586594276-456f8c50b82d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'trainer_name' => 'Name',
            'trainer_p' => 'lorem10',
            'trainer_link' => 'Book this trainer',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('trainers')->insert([
            'trainer_img' => 'https://images.unsplash.com/photo-1543604055-dede4512686d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'trainer_name' => 'Name',
            'trainer_p' => 'lorem10',
            'trainer_link' => 'Book this trainer',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('trainers')->insert([
            'trainer_img' => 'https://images.unsplash.com/photo-1567598317136-3cd762432241?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
            'trainer_name' => 'Name',
            'trainer_p' => 'lorem10',
            'trainer_link' => 'Book this trainer',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('trainers')->insert([
            'trainer_img' => 'https://images.unsplash.com/photo-1615630799526-82d22dd5ad0b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80',
            'trainer_name' => 'Name',
            'trainer_p' => 'lorem10',
            'trainer_link' => 'Book this trainer',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
