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
        Schema::create('podcasts_streamings', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->string('name')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->foreignId('podcast_id')->unsigned()->references('id')->on('podcasts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('agregador_id')->unsigned()->references('id')->on('aggregator_podcasts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('podcasts_streamings');
    }
};
