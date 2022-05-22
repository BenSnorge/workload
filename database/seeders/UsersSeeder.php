<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Billy',
            'email' => 'billy@gmail.com',
            'role_id' => '1',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'fname' => 'John',
            'email' => 'john@mail.com',
            'role_id' => '2',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
