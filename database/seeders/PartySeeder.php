<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parties')->insert([
            'id' => 1,
            'name' => 'PS',
        ]);

        DB::table('parties')->insert([
            'name' => 'PSD',
        ]);

        DB::table('parties')->insert([
            'name' => 'CDS',
        ]);

        DB::table('parties')->insert([
            'name' => 'Chega',
        ]);

        DB::table('parties')->insert([
            'name' => 'PCP',
        ]);

        DB::table('parties')->insert([
            'name' => 'IL',
        ]);

        DB::table('parties')->insert([
            'name' => 'BE',
        ]);

        DB::table('parties')->insert([
            'name' => 'Rir',
        ]);

        DB::table('parties')->insert([
            'name' => 'Livre',
        ]);
    }
}
