<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_programs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('event_organizer_profile_id')->unique()->nullable();
            $table->string('title', 50);
            $table->string('description', 300);
            $table->string('venue', 150);
            $table->tinyInteger('no_of_experts');
            $table->dateTime('schedule_in');
            $table->dateTime('schedule_out');
            $table->tinyInteger('status');
            $table->tinyInteger('timer');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('event_programs', function (Blueprint $table) {
            $table->foreign('event_organizer_profile_id')
                  ->references('id')
                  ->on('event_organizer_profiles')
                  ->onUpdate('CASCADE')
                  ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_programs');
    }
}
