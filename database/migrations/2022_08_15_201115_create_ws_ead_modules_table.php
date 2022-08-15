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
        Schema::create('ws_ead_modules', function (Blueprint $table) {
            $table->integer('module_id')->unsigned()->autoIncrement();
            $table->integer('course_id')->unsigned()->nullable()->default(null);
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->string('module_title', 150)->nullable()->default(null);
            $table->integer('module_order')->nullable()->default(null)->index('modules_order');
            $table->char('module_active', 1)->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_modules');
    }
};
