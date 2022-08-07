<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_reservations', function (Blueprint $table) {
            $table->string('date', 191)->after('id');
            $table->string('time', 191)->after('id');
            $table->string('person', 191)->after('id');
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
            //
        });
    }
}
