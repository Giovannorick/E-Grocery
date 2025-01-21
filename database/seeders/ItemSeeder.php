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
            'image_url' => '1.jpg',
            'category_id' => 1,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 2',
            'item_desc' => 'This is about the product details',
            'price' => 9000,
            'image_url' => '2.jpg',
            'category_id' => 1,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 3',
            'item_desc' => 'This is about the product details',
            'price' => 9000,
            'image_url' => '3.jpg',
            'category_id' => 1,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 4',
            'item_desc' => 'This is about the product details',
            'price' => 7000,
            'image_url' => '4.jpg',
            'category_id' => 1,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 5',
            'item_desc' => 'This is about the product details',
            'price' => 5000,
            'image_url' => '5.jpg',
            'category_id' => 1,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 6',
            'item_desc' => 'This is about the product details',
            'price' => 6000,
            'image_url' => '6.jpg',
            'category_id' => 2,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 7',
            'item_desc' => 'This is about the product details',
            'price' => 3000,
            'image_url' => '7.jpg',
            'category_id' => 2,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 8',
            'item_desc' => 'This is about the product details',
            'price' => 2000,
            'image_url' => '8.jpg',
            'category_id' => 2,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 9',
            'item_desc' => 'This is about the product details',
            'price' => 1000,
            'image_url' => '9.jpg',
            'category_id' => 2,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 10',
            'item_desc' => 'This is about the product details',
            'price' => 1000,
            'image_url' => '10.jpg',
            'category_id' => 2,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 11',
            'item_desc' => 'This is about the product details',
            'price' => 3000,
            'image_url' => '11.jpg',
            'category_id' => 3,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 12',
            'item_desc' => 'This is about the product details',
            'price' => 2000,
            'image_url' => '12.jpg',
            'category_id' => 3,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 13',
            'item_desc' => 'This is about the product details',
            'price' => 3000,
            'image_url' => '13.jpg',
            'category_id' => 3,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 14',
            'item_desc' => 'This is about the product details',
            'price' => 10000,
            'image_url' => '14.jpg',
            'category_id' => 3,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 15',
            'item_desc' => 'This is about the product details',
            'price' => 7000,
            'image_url' => '15.jpg',
            'category_id' => 3,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 16',
            'item_desc' => 'This is about the product details',
            'price' => 8000,
            'image_url' => '16.jpg',
            'category_id' => 4,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 17',
            'item_desc' => 'This is about the product details',
            'price' => 5000,
            'image_url' => '17.jpg',
            'category_id' => 4,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 18',
            'item_desc' => 'This is about the product details',
            'price' => 4000,
            'image_url' => '18.jpg',
            'category_id' => 4,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 19',
            'item_desc' => 'This is about the product details',
            'price' => 3000,
            'image_url' => '19.jpg',
            'category_id' => 4,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Item 20',
            'item_desc' => 'This is about the product details',
            'price' => 2000,
            'image_url' => '20.jpg',
            'category_id' => 4,
        ]);
    }
}
