<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tags")->insert([
            "name" => "chocolate"
        ]);
        DB::table("tags")->insert([
            "name" => "salados"
        ]);
        DB::table("tags")->insert([
            "name" => "vainilla"
        ]);
    }
}
