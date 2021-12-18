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
        Schema::create('addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('kinetotherapist_id');
            $table->primary('kinetotherapist_id');
            $table->foreign('kinetotherapist_id')->references('id')->on('kinetotherapists')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->string('city', 100);
            $table->string('street', 100)->nullable();
            $table->string('street_nr', 50)->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
