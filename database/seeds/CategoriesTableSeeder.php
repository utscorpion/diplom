<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Locations as a constants
     */
    const CATEGORIES = [
        [
            'title' => 'БАД',
        ],
        [
            'title' => 'Косметика',
        ],
        [
            'title' => 'Уход и гигиена',
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::CATEGORIES as $category) {
            DB::table('categories')->insert([
                'title' => $category['title']
            ]);
        }
    }
}
