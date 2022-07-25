<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'user_id' => 1,
          'shop_id' => 1,
          'reservation_date' => date('Y-m-d'),
          'time_id' => 1,
          'person_id' => 5,
        ];
        DB::table('_reservations')->insert($param);
        $param = [
          'user_id' => 2,
          'shop_id' => 5,
          'reservation_date' => date('Y-m-d'),
          'time_id' => 2,
          'person_id' => 3,
        ];
        DB::table('_reservations')->insert($param);
    }
}
