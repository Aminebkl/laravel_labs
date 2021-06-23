<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("serviceItem")->insert([
            "titre" => "GET IN THE LAB",
            "icone" => "flaticon-023-flask",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "PROJECTS ONLINE",
            "icone" => "flaticon-011-compass",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "SMART MARKETING",
            "icone" => "flaticon-037-idea",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "SOCIAL MEDIA",
            "icone" => "flaticon-039-vector",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "BRAINSTORMING",
            "icone" => "flaticon-036-brainstorming",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "DOCUMENTED",
            "icone" => "flaticon-026-search",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "RESPONSIVE",
            "icone" => "flaticon-018-laptop-1",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "RETINA READY",
            "icone" => "flaticon-043-sketch",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);

        DB::table("serviceItem")->insert([
            "titre" => "ULTRA MODERN",
            "icone" => "flaticon-012-cube",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
    }
}
