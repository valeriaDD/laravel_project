<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AlterKinetotherapistColumnLength extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            ALTER TABLE kinetotherapist 
                MODIFY COLUMN name varchar(100) NOT NULL,
                MODIFY COLUMN surname varchar(100) NOT NULL;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // nonessential rollback
    }
}
