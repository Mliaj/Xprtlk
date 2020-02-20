<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventOrganizerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_organizer_profiles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('personal_info_id')->unique();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('personal_info_id')
                  ->references('id')
                  ->on('personal_infos')
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
        Schema::dropIfExists('event_organizer_profiles');
    }
}
