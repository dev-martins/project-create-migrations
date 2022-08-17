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
        Schema::create('ws_ead_student_classes', function (Blueprint $table) {
            $table->integer('student_class_id')->unsigned()->autoIncrement();
            $table->foreignId('user_id')->references('id')->on('users')->unsigned()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('course_id')->unsigned()->nullable()->default(null);
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('class_id')->unsigned()->nullable()->default(null);
            $table->foreign('class_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('module_id')->unsigned()->nullable()->default(null);
            $table->foreign('module_id')->references('module_id')->on('ws_ead_modules')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('enrollment_id')->unsigned()->nullable()->default(null)->index('ws_ead_student_classes_enroll');
            $table->integer('student_class_views')->unsigned()->nullable()->default(null);
            $table->integer('viewing_order')->unsigned()->nullable()->default(1);
            $table->timestamp('student_class_play')->nullable()->default(null);
            $table->integer('student_class_free')->unsigned()->nullable()->default(null);
            $table->integer('student_class_seconds')->unsigned()->nullable()->default(0);
            $table->timestamp('student_class_check')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_student_classes');
    }
};
