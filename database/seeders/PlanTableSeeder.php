<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Monthly Plan',
            'slug' => 'monthly-plan',
            'stripe_name' => 'monthly',
            'stripe_product_id' => 'prod_LZaBCXy9qdwbPs',
            'stripe_price_id' => 'price_1KsR12LHQZAzVj0qeq8y3uYR',
            'price' => 50,
            'abbreviation' => '/month'
        ]);
        Plan::create([
            'name' => 'Yearly Plan',
            'slug' => 'yearly-plan',
            'stripe_name' => 'yearly',
            'stripe_product_id' => 'prod_LZaCZRhOINVBbi',
            'stripe_price_id' => 'price_1KsR1hLHQZAzVj0q1pGOuC1r',
            'price' => 800,
            'abbreviation' => '/year'
        ]);
    }
}
