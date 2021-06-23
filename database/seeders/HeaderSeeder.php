<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("headers")->insert([
            "logo" => "logo.png",
            "item1" => "home",
            "item2" => "services",
            "item3" => "blog",
            "item4" => "contact"
        ]);
    }
}
