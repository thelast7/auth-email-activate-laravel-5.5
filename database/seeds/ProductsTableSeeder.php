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
            [
                'user_id'     => 1,
                'category_id' => 2,
                'name'        => 'Telur Bebek',
                'slug'        => 'telur-bebek',
                'description' => 'Telur bebek Telur bebek Telur bebek Telur bebek Telur bebek Telur bebek Telur bebek Telur bebek',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 20000,
                'status'      => true
            ],
            [
                'user_id'     => 1,
                'category_id' => 3,
                'name'        => 'Telur Burung',
                'slug'        => 'telur-burung',
                'description' => 'Telur Burung Telur Burung Telur Burung Telur Burung Telur Burung Telur Burung Telur Burung Telur Burung',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 30000,
                'status'      => true
            ],
            [
                'user_id'     => 1,
                'category_id' => 4,
                'name'        => 'Telur Angsa',
                'slug'        => 'telur-angsa',
                'description' => 'Telur Angsa Telur Angsa Telur Angsa Telur Angsa Telur Angsa Telur Angsa Telur Angsa Telur Angsa Telur Angsa',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 40000,
                'status'      => true
            ],
            [
                'user_id'     => 1,
                'category_id' => 1,
                'name'        => 'Telur Ayam',
                'slug'        => 'telur-ayam',
                'description' => 'Telur Ayam Telur Ayam Telur Ayam Telur AyamTelur ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 50000,
                'status'      => true
            ],
            [
                'user_id'     => 1,
                'category_id' => 2,
                'name'        => 'Telur Palsu',
                'slug'        => 'telur-palsu',
                'description' => 'Telur Ayam Telur Ayam Telur Ayam Telur AyamTelur ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 60000,
                'status'      => true
            ],
            [
                'user_id'     => 1,
                'category_id' => 3,
                'name'        => 'Telur Dinosaurus',
                'slug'        => 'telur-dinosaurus',
                'description' => 'Telur Ayam Telur Ayam Telur Ayam Telur AyamTelur ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 70000,
                'status'      => true
            ],
            [
                'user_id'     => 1,
                'category_id' => 4,
                'name'        => 'Telur Onta',
                'slug'        => 'telur-onta',
                'description' => 'Telur Ayam Telur Ayam Telur Ayam Telur AyamTelur ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 80000,
                'status'      => true
            ],
            [
                'user_id'     => 1,
                'category_id' => 1,
                'name'        => 'Telur Godzilla',
                'slug'        => 'telur-godzilla',
                'description' => 'Telur Ayam Telur Ayam Telur Ayam Telur AyamTelur ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam Telur Ayam',
                'cover'       => 'backend/images/featured-image.jpg',
                'quantity'    => 5,
                'price'       => 90000,
                'status'      => true
            ],
        ];
        DB::table('products')->insert($products);
    }
}
