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
        Schema::create('subtitle_videos', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->foreignId('video_id')->references('id')->on('aws_videos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('url');
            $table->text('url_signed');
            $table->char('status', 1);
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
        Schema::dropIfExists('subtitle_videos');
    }
};
