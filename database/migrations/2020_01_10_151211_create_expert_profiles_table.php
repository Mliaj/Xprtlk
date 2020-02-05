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
            $table->string('bio', 700);
            $table->string('field', 50);
            $table->string('expertise', 50);
            $table->unsignedInteger('user_id')->unique();
            $table->unsignedInteger('personal_info_id')->unique();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('personal_info_id')
                  ->references('id')
                  ->on('personal_infos')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
