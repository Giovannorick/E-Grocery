<?php

namespace Database\Seeders;

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

        $this->call([RoleSeeder::class]);
        $this->call([GenderSeeder::class]);
        $this->call([AccountSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([ItemSeeder::class]);
        $this->call([OrderSeeder::class]);
    }
}
