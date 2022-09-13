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
            $table->string('Theater_name')->nullable()->change();
            $table->string('Title')->nullable()->change();
            $table->string('Genre')->nullable()->change();
            $table->string('Description')->nullable()->change();
            $table->integer('Theater_room_no')->nullable()->change();
            $table->string('Performer_name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
