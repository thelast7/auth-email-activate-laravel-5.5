<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Telur Ayam',
                'slug' => 'telur-ayam'
            ],
            [
                'name' => 'Telur Bebek',
                'slug' => 'telur-bebek'
            ],
            [
                'name' => 'Telur Ikan',
                'slug' => 'telur-ikan'
            ],
            [
                'name' => 'Telur Puyuh',
                'slug' => 'telur-puyuh'
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
