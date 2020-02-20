<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_profiles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('bio', 700)->nullable();
            $table->string('field')->nullable();
            $table->string('expertise')->nullable();
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
        Schema::dropIfExists('expert_profiles');
    }
}
