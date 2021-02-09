<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("author")->insert([
           [
               "full_name" => "Bobobek Turdiyev",
               "avatar" => "bobobek.jpg",
               "signature" => "Bobobek"
           ],
            [
                "full_name" => "Mukhammadjon Yorkinov",
                "avatar" => "mukhammad.jpg",
                "signature" => "Muhammad"
            ],
            [
                "full_name" => "Ibrokhim Shukrullayev",
                "avatar" => "ibrokhim.jpg",
                "signature" => "Ibrohim"
            ]

        ]);
    }
}
