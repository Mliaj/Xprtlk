<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventProgramExpertLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_program_expert_lists', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('event_program_detail_id')->unique();
            $table->unsignedInteger('expert_profile_id')->unique();
            $table->timestamps();

            $table->foreign('event_program_detail_id')
                  ->references('id')
                  ->on('event_program_details')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            $table->foreign('expert_profile_id')
                  ->references('id')
                  ->on('expert_profiles')
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
        Schema::dropIfExists('event_program_expert_lists');
    }
}
