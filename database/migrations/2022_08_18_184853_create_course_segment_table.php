<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_segment', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('segment_id')->unsigned();
            $table->foreign('segment_id')->references('segment_id')->on('segments')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_segment');
    }
};
