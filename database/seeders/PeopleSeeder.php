<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\People;

class PeopleSeeder extends Seeder
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
          DB::table('people')->insert([
              'userName' => Str::random(50),
              'fullName' => Str::random(50),
              'email' => Str::random(50),
              'cellphone' => Str::random(50),
              'age' => rand(1, 200),
              'dateBorn' => Str::random(50),
          ]);
    }
}
}

