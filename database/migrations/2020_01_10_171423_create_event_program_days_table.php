<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventProgramDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_program_days', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('event_program_id')->unique();
            $table->date('date');
            $table->tinyInteger('no_of_experts');
            $table->string('description', 300);
            $table->timestamps();
        });

        Schema::table('event_program_days', function (Blueprint $table) {
            $table->foreign('event_program_id')
                  ->references('id')
                  ->on('event_programs')
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
        Schema::dropIfExists('event_program_days');
    }
}
