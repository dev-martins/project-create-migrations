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
        Schema::create('ws_config', function (Blueprint $table) {
            $table->integer('conf_id')->autoIncrement();
            $table->string('conf_key', 255)->nullable();
            $table->string('conf_value', 255)->nullable();
            $table->string('conf_type', 255)->nullable();
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
        Schema::dropIfExists('ws_config');
    }
};
