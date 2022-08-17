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
        Schema::create('aws_videos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('url');
            $table->string('url_signed');
            $table->string('thumbnail_url')->nullable()->default(null);
            $table->float('duration_in_seconds')->nullable()->default(0);
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
        Schema::dropIfExists('aws_videos');
    }
};
