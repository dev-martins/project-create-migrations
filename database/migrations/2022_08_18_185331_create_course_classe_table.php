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
        Schema::create('course_classe', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('classe_id')->unsigned();
            $table->foreign('classe_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('course_classe');
    }
};
