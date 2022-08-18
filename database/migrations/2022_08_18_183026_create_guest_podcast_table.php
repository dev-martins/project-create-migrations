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
        Schema::create('guest_podcast', function (Blueprint $table) {
            $table->integer('guest_id')->unsigned()->autoIncrement();
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('pro_id')->on('ws_ead_professionals')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('guest_podcast');
    }
};
