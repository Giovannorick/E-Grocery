<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'first_name' => 'Justin',
            'last_name' => 'Reynolds',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin123'),
            'display_picture_link' => 'Admin.jpg',
            'role_id' => 1,
            'gender_id' => 1,
        ]);

        DB::table('accounts')->insert([
            'first_name' => 'Michelle',
            'last_name' => 'Mikaela',
            'email' => 'user@gmail.com',
            'password' => bcrypt('User123'),
            'display_picture_link' => 'User.jpg',
            'role_id' => 2,
            'gender_id' => 2,
        ]);
    }
}
