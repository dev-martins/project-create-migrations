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
        Schema::create('ws_ead_enrollments', function (Blueprint $table) {
            $table->integer('enrollment_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('wc_ead_student_user');
            $table->integer('course_id')->unsigned()->nullable()->default(null)->index('wc_ead_student_course');
            $table->integer('enrollment_order')->unsigned()->nullable()->default(null)->index('wc_ead_student_order');
            $table->integer('enrollment_bonus')->unsigned()->nullable()->default(null)->index('wc_ead_student_bonus');
            $table->integer('enrollment_group')->nullable()->default(null);
            $table->timestamp('enrollment_start')->nullable()->default(null);
            $table->timestamp('enrollment_access')->nullable()->default(null);
            $table->timestamp('enrollment_end')->nullable()->default(null);
            $table->integer('enrollment_introcourse_watched')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_enrollments');
    }
};
