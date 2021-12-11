<?php

// Facades -> un acces static la orice obiect global din Laravel
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateKinetotherapistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("

       INSERT INTO kinetotherapists (name, surname, phone_nr, abbreviation)
        VALUES  ('Name1','Surname1', NULL, 'Worker1'),
		('Name2','Surname2', NULL, 'Worker2'),
		('Name3','Surname3', NULL, 'Worker3'),
		('Name4','Surname4', '060000000', 'Worker4'),
        ('Name5','Surname5', '060000000', 'Worker5');

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
         
         TRUNCATE TABLE `kinetotherapists`;
         
         ");
    }
}
