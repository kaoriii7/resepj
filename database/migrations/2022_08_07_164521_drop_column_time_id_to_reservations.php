<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnTimeIdToReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_reservations', function (Blueprint $table) {
            $table->dropColumn('time_id');
            $table->dropColumn('person_id');
            $table->dropColumn('reservation_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_reservations', function (Blueprint $table) {
            $table->foreignId('time_id');
            $table->foreignId('person_id');
            $table->date('reservation_date');
        });
    }
}
