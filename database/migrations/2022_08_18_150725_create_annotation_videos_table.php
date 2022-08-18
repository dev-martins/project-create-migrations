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
        Schema::create('annotation_videos', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade')->onUpdate('cascade');
            $table->text('annotation')->nullable()->default(null);
            $table->double('time_video')->nullable()->default(0);
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
        Schema::dropIfExists('annotation_videos');
    }
};
