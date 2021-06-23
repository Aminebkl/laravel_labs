<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("user")->insert([
            "image" => "1.jpg",
            "name" => "Christinne Williams",
            "job" => "PROJECT MANAGER",
            "email" => "test1@gmail.com",
            "password" => "test1"
        ]);

        DB::table("user")->insert([
            "image" => "2.jpg",
            "name" => "Christinne Williams",
            "job" => "JUNIOR DEVELOPER",
            "email" => "test2@gmail.com",
            "password" => "test2"
        ]);

        DB::table("user")->insert([
            "image" => "3.jpg",
            "name" => "Christinne Williams",
            "job" => "DIGITAL DESIGNER",
            "email" => "test3@gmail.com",
            "password" => "test3"
        ]);
    }
}
