<?php

// Facades -> un acces static la orice obiect global din Laravel
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("

        CREATE TABLE `services` (
            id BIGINT UNSIGNED AUTO_INCREMENT,
            name VARCHAR(25) NOT NULL,
            duration TIME NOT NULL,
            price DECIMAL (6,2) NOT NULL,
            abbreviation VARCHAR(10) NOT NULL,
            createdAt datetime NOT NULL DEFAULT CURRENT_TIMESTAMP(),
            PRIMARY KEY (id)
        
        ) engine = innodb

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
         
         DROP TABLE services;
         
         ");
    }
}
