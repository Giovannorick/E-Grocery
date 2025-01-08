<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'account_id' => 1,
            'item_id' => 1,
            'price' => 1000,
        ]);
        DB::table('orders')->insert([
            'account_id' => 1,
            'item_id' => 3,
            'price' => 5000,
        ]);
        DB::table('orders')->insert([
            'account_id' => 2,
            'item_id' => 2,
            'price' => 7000,
        ]);
        DB::table('orders')->insert([
            'account_id' => 2,
            'item_id' => 4,
            'price' => 5000,
        ]);
    }
}
