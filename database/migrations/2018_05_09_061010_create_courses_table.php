<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('category');
            $table->longText('description');
            $table->integer('price');
            $table->dateTimeTz('start');
            $table->dateTimeTz('finish');
            $table->unsignedInteger('consultant_id');
            $table->unsignedInteger('address_id');
            $table->timestamps();

            $table->foreign('consultant_id')->references('id')->on('consultants');
            $table->foreign('address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
