<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Desporto',
            'slug' => 'desporto',
            'color' => 'blue'
        ]);

        DB::table('categories')->insert([
            'name' => 'Política Internacional',
            'slug' => 'politica_internacional',
            'color' => 'green'
        ]);

        DB::table('categories')->insert([
            'name' => 'Novidades',
            'slug' => 'novidades',
            'color' => 'indigo'
        ]);
    }
}
