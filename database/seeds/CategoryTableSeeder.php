<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("category")->insert([
            [
                "name" => "Sport",
                "parent_id" => 0
            ],
            [
                "name" => "Technology",
                "parent_id" => 0
            ],
            [
                "name" => "Music",
                "parent_id" => 0
            ],
            [
                "name" => "Computers",
                "parent_id" => 2
            ],
            [
                "name" => "Smartphones",
                "parent_id" => 2
            ],
        ]);
    }
}
