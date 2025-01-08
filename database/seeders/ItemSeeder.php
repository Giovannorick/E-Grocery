<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_name' => 'Item 1',
            'item_desc' => 'This is about the product details',
            'price' => 2000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 2',
            'item_desc' => 'This is about the product details',
            'price' => 9000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 3',
            'item_desc' => 'This is about the product details',
            'price' => 9000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 4',
            'item_desc' => 'This is about the product details',
            'price' => 7000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 5',
            'item_desc' => 'This is about the product details',
            'price' => 5000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 6',
            'item_desc' => 'This is about the product details',
            'price' => 6000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 7',
            'item_desc' => 'This is about the product details',
            'price' => 3000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 8',
            'item_desc' => 'This is about the product details',
            'price' => 2000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 9',
            'item_desc' => 'This is about the product details',
            'price' => 1000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 10',
            'item_desc' => 'This is about the product details',
            'price' => 1000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 11',
            'item_desc' => 'This is about the product details',
            'price' => 3000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 12',
            'item_desc' => 'This is about the product details',
            'price' => 2000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 13',
            'item_desc' => 'This is about the product details',
            'price' => 3000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 14',
            'item_desc' => 'This is about the product details',
            'price' => 10000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 15',
            'item_desc' => 'This is about the product details',
            'price' => 7000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 16',
            'item_desc' => 'This is about the product details',
            'price' => 8000,
        ]);
    }
}
