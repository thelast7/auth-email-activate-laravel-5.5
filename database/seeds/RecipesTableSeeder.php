<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                'user_id' => 1,
                'category_id' => 1,
                'name' => 'Telur Semur',
                'slug' => 'telur-semur',
                'description' => 'Telur SemurTelur SemurTelur SemurTelur SemurTelur SemurTelur SemurTelur SemurTelur SemurTelur SemurTelur Semur',
                'cover' => 'backend/images/featured-image.jpg',
                'status' => true
            ],
        ];
        DB::table('recipes')->insert($recipes);
    }
}
