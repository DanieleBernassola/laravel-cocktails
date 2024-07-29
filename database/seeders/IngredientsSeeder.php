<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            ['name' => 'vodka','description' => 'From Russia strong flavour', 'gradation' => '20'],
            ['name' => 'gin','description' => 'From England strong flavour', 'gradation' => '25'],
            ['name' => 'grappa','description' => 'From Italy strong flavour', 'gradation' => '30']
        ]);
    }
}
