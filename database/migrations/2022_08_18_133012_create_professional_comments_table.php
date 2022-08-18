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
        Schema::create('professional_comments', function (Blueprint $table) {
            $table->integer('comment_id')->unsigned()->autoIncrement();
            $table->integer('pro_id')->unsigned()->nullable()->default(null);
            $table->foreign('pro_id')->references('pro_id')->on('ws_ead_professionals')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('classe_id')->unsigned()->nullable()->default(null);
            $table->foreign('classe_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade')->onUpdate('cascade');
            $table->float('video_time_seconds')->nullable()->default(null)->index('video_time_seconds');
            $table->string('comment')->nullable()->default(1);
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
        Schema::dropIfExists('professional_comments');
    }
};
