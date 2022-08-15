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
        Schema::create('ws_ead_courses_bonus', function (Blueprint $table) {
            $table->integer('bonus_id')->unsigned()->autoIncrement();
            $table->integer('course_id')->unsigned()->nullable()->default(null)->index('wc_ead_course_bonus');
            $table->integer('bonus_course_id')->unsigned()->nullable()->default(null)->index('wc_ead_bonus_id');
            $table->integer('bonus_ever')->nullable()->default(null);
            $table->integer('bonus_wait')->nullable()->default(null);
            $table->date('bonus_ever_date')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_courses_bonus');
    }
};
