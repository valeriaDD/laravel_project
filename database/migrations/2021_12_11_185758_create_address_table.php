<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->unsignedBigInteger('kinetotherapist_id');
            $table->primary('kinetotherapist_id');
            $table->foreign('kinetotherapist_id')->references('id')->on('kinetotherapist');
            $table->string('city', 100);
            $table->string('street', 200)->nullable();
            $table->string('street_nr', 20)->nullable();
            $table->string('block_nr',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
