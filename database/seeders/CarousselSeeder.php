<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarousselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("caroussels")->insert([
            "description" => "Get you freebie template now!",
            "logo" => "big-logo.png"
        ]);
    }
}
