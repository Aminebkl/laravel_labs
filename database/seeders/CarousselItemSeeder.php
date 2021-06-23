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
        DB::table("carousssel_items")->insert([
            "image1" => "01.jpg",
            "image2" => "02.jpg",
        ]);
    }
}
