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
        Schema::create('legends', function (Blueprint $table) {
            $table->integer('legend_id')->unsigned()->autoIncrement();
            $table->foreignId('video_id')->unsigned()->references('id')->on('aws_videos')->onDelete('cascade')->onUpdate('cascade');
            $table->double('start_time')->default(null);
            $table->double('end_time')->default(null);
            $table->text('legend')->default(null);
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
        Schema::dropIfExists('legends');
    }
};
