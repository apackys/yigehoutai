<?php

use Illuminate\Database\Seeder;

class ArticleAndAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            ['article_name' => '五年高考三年模拟',
            'article_id' => rand(1,3) ],
            ['article_name' => '难不难高考',
            'article_id' => rand(1,3) ],
            ['article_name' => '这是学渣系列',
            'article_id' => rand(1,3) ]
        ]);
        DB::table('author')->insert([
            ['author_name' => '人教版'],
            ['author_name' => '沪教版'],
            ['author_name' => '广教版'],
        ]);
    }
}
