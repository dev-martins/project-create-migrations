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
        Schema::create('ws_ead_student_certificates', function (Blueprint $table) {
            $table->integer('certificate_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('wc_certificate_user');
            $table->integer('course_id')->unsigned()->nullable()->default(null)->index('wc_certificate_course');
            $table->integer('enrollment_id')->unsigned()->nullable()->default(null)->index('wc_certificate_enrollment');
            $table->string('certificate_key');
            $table->date('certificate_issued');
            $table->integer('certificate_status')->unsigned()->nullable()->default(0);
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
        Schema::dropIfExists('ws_ead_student_certificates');
    }
};
