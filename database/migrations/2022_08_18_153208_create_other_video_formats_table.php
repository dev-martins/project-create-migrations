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
        Schema::create('other_video_formats', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->foreignId('video_id')->unsigned()->references('id')->on('aws_videos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('format')->nullable()->default(null)->index('other_video_formats_format_index');
            $table->string('url')->nullable()->default(null);
            $table->text('url_signed')->nullable()->default(null);
            $table->string('thumbnail_url')->nullable()->default(null);
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
        Schema::dropIfExists('other_video_formats');
    }
};
