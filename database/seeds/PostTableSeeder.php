<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("post")->insert([
            [
              "title" => "Title 1",
              "description" => "Desc 1",
              "content" => "Content 1",
                "author_id" => 1
            ],
            [
                "title" => "Title 2",
                "description" => "Desc 2",
                "content" => "Content 2",
                "author_id" => 2
            ],
            [
                "title" => "Title 3",
                "description" => "Desc 3",
                "content" => "Content 3",
                "author_id" => 1
            ],
            [
                "title" => "Title 4",
                "description" => "Desc 4",
                "content" => "Content 4",
                "author_id" => 3
            ],
            [
                "title" => "Title 5",
                "description" => "Desc 5",
                "content" => "Content 5",
                "author_id" => 2
            ],
        ]);
    }
}
