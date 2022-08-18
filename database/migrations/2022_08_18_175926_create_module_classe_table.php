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
        Schema::create('module_classe', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->integer('classe_id')->unsigned();
            $table->foreign('classe_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('module_id')->unsigned();
            $table->foreign('module_id')->references('module_id')->on('ws_ead_modules')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('classe_order')->default(1);
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
        Schema::dropIfExists('module_classe');
    }
};
