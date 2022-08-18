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
        Schema::create('liked_courses', function (Blueprint $table) {
            $table->integer('idliked_video')->unsigned()->autoIncrement();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->unsigned()->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->char('status', 1)->default(null);
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
        Schema::dropIfExists('liked_courses');
    }
};
