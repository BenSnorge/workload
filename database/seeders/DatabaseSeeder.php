<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* $this->call(HomeSeeder::class);
        $this->call(CardSeeder::class);
        $this->call(ContentSeeder::class);
        $this->call(NutritionSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(TrainerSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CourseSettingSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RoleSeeder::class); */

        $this->call([
            HomeSeeder::class,
            CardSeeder::class,
            ContentSeeder::class,
            NutritionSeeder::class,
            SocialSeeder::class,
            TrainerSeeder::class,
            FooterSeeder::class,
            CourseSeeder::class,
            CourseSettingSeeder::class,
            UsersSeeder::class,
            RoleSeeder::class
        ]);
    }
}
