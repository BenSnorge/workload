<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KundeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kundes')->insert([
            'name' => 'Planeo',
            'abbr' => 'PLA',
            'color' => 'class="btn btn-outline-secondary"',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'MDM',
            'abbr' => 'MDM',
            'color' => 'class="btn btn-outline-primary"',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Matramaxx',
            'abbr' => 'MAT',
            'color' => 'class="btn btn-outline-success"',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Arvato',
            'abbr' => 'ARV',
            'color' => 'class="btn btn-outline-danger"',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Katag',
            'abbr' => 'KAT',
            'color' => 'class="btn btn-outline-warning"',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Sonstige Kleine Kunden',
            'abbr' => 'SONS',
            'color' => 'class="btn btn-outline-info"',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Wambo Intern',
            'abbr' => 'WAM',
            'color' => 'class="btn btn-outline-dark"',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Cvents.',
            'abbr' => 'CVE',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Motorteile',
            'abbr' => 'MOT',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Miniindians',
            'abbr' => 'MIN',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Time4Wellness',
            'abbr' => 'T4W',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Nachhaltigkeitsreg.',
            'abbr' => 'NACH',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'BadCompany',
            'abbr' => 'BC',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'Glas & Beschlag',
            'abbr' => 'G&B',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('kundes')->insert([
            'name' => 'e&co',
            'abbr' => 'e&co',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
