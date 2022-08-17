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
        Schema::create('ws_ead_signatures_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('signature_id')->references('id')->on('ws_ead_signatures')->unsigned()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('course_id')->unsigned()->nullable()->default(null);
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ws_ead_signatures_courses');
    }
};
