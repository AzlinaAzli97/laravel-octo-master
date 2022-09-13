<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movie', function($table) {
            $table->string('Theater_name');
            $table->dateTime('Start_time')->nullable();
            $table->dateTime('End_time')->nullable();
            $table->integer('Theater_room_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie', function($table) {
            $table->string('Theater_name');
            $table->dateTime('Start_time')->nullable();
            $table->dateTime('End_time')->nullable();
            $table->integer('Theater_room_no');
        });
    }
};
