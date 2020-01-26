<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventProgramDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_program_details', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('event_program_day_id')->unique();
            $table->string('topic', 150);
            $table->string('field', 45);
            $table->string('expertise', 100);
            $table->time('time_slot_in');
            $table->time('time_slot_out');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('event_program_day_id')
                  ->references('id')
                  ->on('event_program_days')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_program_details');
    }
}
