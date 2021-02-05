<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = range(0,100);
        foreach ($arrays as $valor) {
          DB::table('configurations')->insert([
              'language' => Str::random(50),
              'country' => Str::random(50),
              'state' => Str::random(50),
          ]);
    }
}
}
