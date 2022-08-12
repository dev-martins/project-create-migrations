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
        Schema::create('ws_gallery', function (Blueprint $table) {
            $table->integer('gallery_image_id')->autoIncrement();
            $table->integer('gallery_id');
            $table->string('gallery_image')->nullable()->default(null);
            $table->integer('gallery_image2x')->nullable()->default(null);
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
        Schema::dropIfExists('ws_gallery');
    }
};
