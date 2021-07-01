<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HeaderSeeder::class);
        $this->call(CarousselSeeder::class);
        $this->call(CarousselItemSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(TestimonialSeeder::class);
 
    }
}
