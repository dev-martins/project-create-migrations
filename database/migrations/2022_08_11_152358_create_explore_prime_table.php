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
        Schema::create('explore_prime', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->string('description');
            $table->string('button_label', 45);
            $table->string('thumbnail');
            $table->string('href', 45);
            $table->integer('enabled')->unsigned();
            $table->integer('order')->unsigned();
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
        Schema::dropIfExists('explore_prime');
    }
};
