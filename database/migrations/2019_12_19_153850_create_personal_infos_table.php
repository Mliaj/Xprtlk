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
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->year('birth_date');
            $table->string('language', 25);
            $table->string('contact', 20);
            $table->string('address', 150);
            $table->string('position', 50);
            $table->string('company', 50);
            //not sure if i really want to save this to db
            // $table->string('profile_pic')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
