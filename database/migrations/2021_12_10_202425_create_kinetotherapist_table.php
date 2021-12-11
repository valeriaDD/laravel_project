<?php

// Facades -> un acces static la orice obiect global din Laravel
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateKinetotherapistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("

        CREATE TABLE kinetotherapists (
            id BIGINT UNSIGNED AUTO_INCREMENT,
            name VARCHAR(12) NOT NULL,
            surname VARCHAR(12) NOT NULL,
            phone_nr VARCHAR(9),
            abbreviation VARCHAR(10) NOT NULL,
            PRIMARY KEY (id)
        )engine=innodb 

       ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("
         
         DROP TABLE kinetotherapists ;
         
         ");
    }
}
