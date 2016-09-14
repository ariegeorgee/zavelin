<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hakakses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hakakses', function (Blueprint $table) {
            $table->increments('id_hakakses')->index();
            $table->integer('id_role');
            $table->integer('id_menu');
            $table->integer('id_akses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hakakses');
    }
}
