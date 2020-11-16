<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
              'title' => 'タイトル1',
              'content' => '内容1'
            ],
            [
              'title' => 'タイトル2',
              'content' => '内容2'
            ],
            [
              'title' => 'タイトル3',
              'content' => '内容3'
            ],
          ]);
    }
}
