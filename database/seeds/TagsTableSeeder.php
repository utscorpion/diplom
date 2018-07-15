<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Locations as a constants
     */
    const TAGS = [
        [
            'title' => 'Новость',
        ],
        [
            'title' => 'Совет',
        ],
        [
            'title' => 'Статья',
        ],
        [
            'title' => 'Акция',
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::TAGS as $tag) {
            DB::table('tags')->insert([
                'title' => $tag['title']
            ]);
        }
    }
}
