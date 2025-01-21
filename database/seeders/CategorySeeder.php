<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Vegetables',
        ]);
        DB::table('categories')->insert([
            'name' => 'Meat',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fruit',
        ]);
        DB::table('categories')->insert([
            'name' => 'Beverages',
        ]);
    }
}
