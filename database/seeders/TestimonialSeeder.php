<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("testimonial")->insert([
            "titre" => "WHAT OUR CLIENTS SAY",
            "image" => "test-man.png"
        ]);
    }
}
