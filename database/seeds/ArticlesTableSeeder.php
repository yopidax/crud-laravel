<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->truncate();

        DB::table('articles')->insert(
            [
                [
                    'title'      => 'article1',
                    'body'       => 'aritcle1 body',
                    'created_at' => '2017-03-27 00:00:00',
                    'updated_at' => '2017-03-27 00:00:00',
                ],
                [
                    'title'      => 'article2',
                    'body'       => 'aritcle2 body',
                    'created_at' => '2017-03-28 00:00:00',
                    'updated_at' => '2017-03-28 00:00:00',
                ],
                [
                    'title'      => 'article3',
                    'body'       => 'aritcle3 body',
                    'created_at' => '2017-03-26 00:00:00',
                    'updated_at' => '2017-03-26 00:00:00',
                ],
            ]
        );
    
    }

}
