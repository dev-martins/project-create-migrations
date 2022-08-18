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
        Schema::create('author_podcast', function (Blueprint $table) {
            $table->integer('host_id')->unsigned()->autoIncrement();
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('pro_id')->on('ws_ead_professionals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('podcast_id')->unsigned()->references('id')->on('podcasts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('author_podcast');
    }
};
