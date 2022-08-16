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
        Schema::create('ws_ead_courses', function (Blueprint $table) {
            $table->integer('course_id')->unsigned()->autoIncrement();
            $table->string('course_title')->nullable()->default(null);
            $table->integer('course_author')->unsigned()->nullable()->default(null);
            $table->foreign('course_author')->references('pro_id')->on('ws_ead_professionals')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('course_segment')->unsigned()->nullable()->default(null);
            $table->foreign('course_segment')->references('segment_id')->on('segments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('signature_id')->references('id')->on('ws_ead_signatures')->onDelete('cascade')->onUpdate('cascade');
            $table->text('course_desc')->nullable()->default(null);
            $table->string('course_cover')->nullable()->default(null);
            $table->string('course_image_details')->nullable()->default(null);
            $table->string('course_name')->nullable()->default(null);
            $table->string('course_logo')->nullable()->default(null);
            $table->date('course_open')->nullable()->default(null);
            $table->timestamp('course_created')->nullable()->default(null);
            $table->timestamp('course_updated')->nullable()->default(null);
            $table->integer('course_status')->nullable()->default(1);
            $table->integer('course_order')->nullable()->default(null);
            $table->char('course_launch')->nullable()->default(0); // lançamento do curso
            $table->integer('course_launch_priority')->nullable()->default(null); // prioridade de lançamento do curso
            $table->integer('course_slider')->nullable()->default(null);
            $table->integer('course_slider_priority')->nullable()->default(null);
            $table->char('highlighted')->nullable()->default(0);
            $table->char('pay')->nullable()->default(1);
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
        Schema::dropIfExists('ws_ead_courses');
    }
};
