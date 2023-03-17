<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'tortas',
            'created_at' => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name' => 'cajas de regalo'
        ]);
        DB::table('categories')->insert([
            'name' => 'panes'
        ]);
    }
}
