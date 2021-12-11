<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->unsignedBigInteger('kinetotherapist_id');
            $table->unsignedBigInteger('working_day_id');
            $table->primary(['kinetotherapist_id', 'working_day_id']);
            $table->foreign('kinetotherapist_id')->references('id')->on('kinetotherapist');
            $table->foreign('working_day_id')->references('id')->on('working_days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
