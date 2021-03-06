<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterKinetotherapistColumnLength extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kinetotherapists', function (Blueprint $table) {
            $table->string('name',100)->change();
            $table->string('surname',100)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kinetotherapists', function (Blueprint $table) {
            $table->string('name',12)->change();
            $table->string('surname',12)->change();
        });
    }
}
