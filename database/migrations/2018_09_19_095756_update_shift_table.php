<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::table('shift', function (Blueprint $table){
            $table->datetime('date');
            $table->integer('room_id');
            $table->string('other_text');
            $table->dropColumn('event_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shift', function (Blueprint $table){
            $table->dropColumn('date');
            $table->dropColumn('room_id');
            $table->dropColumn('other_text');
            $table->integer('event_id');
        });
    }
}
