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
            $feeChoice = ['Yes', 'Partially', 'No'];

            $table->increments('id')->unsigned();
            $table->unsignedInteger('event_organizer_profile_id');
            $table->string('title', 50);
            $table->string('logo_location')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location', 255);
            $table->dateTime('start_apply_date');
            $table->dateTime('end_apply_date');
            $table->string('expert_fees'); // Stored as array of strings
            $table->string('description', 300);
            $table->string('audience_size', 25);
            $table->string('topics'); // Stored as array of strings
            $table->string('expert_roles'); // Stored as array of strings
            $table->string('presentation_types'); // Stored as array of strings
            $table->enum('travel_fee', $feeChoice);
            $table->enum('accomodation_fee', $feeChoice);
            $table->tinyInteger('with_ticket');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('event_programs', function (Blueprint $table) {
            $table->foreign('event_organizer_profile_id')
                  ->references('id')
                  ->on('event_organizer_profiles')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
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
