<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarousselItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("caroussel_items")->insert([
            "image" => "01.jpg",
        ]);

        DB::table("caroussel_items")->insert([
            "image" => "02.jpg",
        ]);


    }
}
