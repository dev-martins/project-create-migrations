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
        Schema::create('ws_ead_student_downloads', function (Blueprint $table) {
            $table->integer('download_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null);
            $table->string('user_ip')->nullable()->default(null)->index('wc_ead_student_downloads_user');
            $table->integer('course_id')->unsigned()->nullable()->default(null)->index('wc_ead_student_downloads_enrollment');
            $table->integer('class_id')->unsigned()->nullable()->default(null)->index('wc_ead_student_downloads_class');
            $table->integer('module_id')->unsigned()->nullable()->default(null);
            $table->integer('material_id')->unsigned()->nullable()->default(null);
            $table->string('download_file')->nullable()->default(null);
            $table->string('download_filename')->nullable()->default(null);
            $table->timestamp('download_date')->nullable()->default(null);
            $table->string('user_location')->nullable()->default(null);
            $table->char('download_filetype', 3)->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_student_downloads');
    }
};
