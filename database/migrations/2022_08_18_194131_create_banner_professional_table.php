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
        Schema::create('banner_professional', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->foreignId('banner_id')->unsigned()->references('id')->on('banners')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('pro_id')->on('ws_ead_professionals')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('banner_professional');
    }
};
