<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            "name" => "Lemon Pie",
            "description" => "Masa sable breton rellena con nuestra untuosa crema de limón y terminado con el clásico merengue italiano.",
            "price" => 4200,
            "promo" => 4000,
            "state" => 1,
            "important" => 1,
            "id_category" => 1,
        ]);
    }
}
