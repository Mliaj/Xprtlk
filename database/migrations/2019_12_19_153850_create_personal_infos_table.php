<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('user_id')->unique();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->year('birth_date')->nullable();
            $table->string('language', 25)->nullable();
            $table->string('contact', 20)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('position', 50)->nullable();
            $table->string('company', 50)->nullable();
            //not sure if i really want to save this to db
            // $table->string('profile_pic')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('personal_infos', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
    }
}
