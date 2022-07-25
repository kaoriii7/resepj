<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'number_of_persons' => 1,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 2,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 3,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 4,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 5,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 6,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 7,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 8,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 9,
        ];
        DB::table('_persons')->insert($param);
        $param = [
          'number_of_persons' => 10,
        ];
        DB::table('_persons')->insert($param);
    }
}
