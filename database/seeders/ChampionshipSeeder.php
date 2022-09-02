<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Championships')->insert([
            'nom' => Str::random(10),
            'logo' => Str::random(10),
            'presentation' => Str::random(10),
            'indice_uefa' => 1,
        ]);
    }
}
