<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'user_id'     => 1,
                'category_id' => 1,
                'name'        => 'Telur Ayam Kampung',
                'slug'        => 'telur-ayam-kampung',
                'description' => 'Telur ayam Telur ayam Telur ayam Telur ayam Telur ayam Telur ayam Telur ayam Telur ayam',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 10000,
                'status'      => true
            ],
        ];
        DB::table('products')->insert($products);
    }
}
