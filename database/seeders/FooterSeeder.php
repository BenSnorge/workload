<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'footer_header1' => 'Contact Us',
            'footer_header2' => 'Privacy & Policy',
            'footer_link1' => 'Contact',
            'footer_link2' => 'Terms Of Service',
            'footer_link3' => 'Privacy',
            'footer_city' => 'Miami',
            'footer_street' => '21 Jump Street',
            'footer_zipcode' => '123456',
            'footer_phone' => '92160165105',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),

        ]);
    }
}
