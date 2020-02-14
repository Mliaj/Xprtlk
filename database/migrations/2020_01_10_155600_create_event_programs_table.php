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
            $table->unsignedInteger('event_organizer_profile_id')->unique();
            $table->string('title', 50);
            $table->string('logo_location', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location', 255);
            $table->date('start_apply_date');
            $table->date('end_apply_date');
            $table->string('expert_fees'); //Stored as array string
            $table->string('description', 300);
            $table->string('audience_size', 25);
            $table->string('topics'); // Stored as array string
            $table->string('expert_roles'); // Stored as array string
            $table->string('presentation_type'); // Stored as array string
            $table->enum('travel_fee', ['yes', 'partially', 'no']);
            $table->enum('accomodation_fee', ['yes', 'partially', 'no']);
            $table->tinyInteger('with_ticket');
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
