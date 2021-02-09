<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("post_categories")->insert([
            [
                "post_id" => 1,
                "category_id" => 1
            ],
            [
                "post_id" => 1,
                "category_id" => 3
            ],
            [
                "post_id" => 2,
                "category_id" => 3
            ],
            [
                "post_id" => 2,
                "category_id" => 4
            ],
            [
                "post_id" => 3,
                "category_id" => 2
            ],
            [
                "post_id" => 4,
                "category_id" => 1
            ],
            [
                "post_id" => 4,
                "category_id" => 5
            ],
        ]);
    }
}
