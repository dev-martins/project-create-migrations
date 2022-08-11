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
        Schema::create('workcontrol_api', function (Blueprint $table) {
            $table->integer('api_id')->autoIncrement();
            $table->string('api_key', 255)->nullable()->default(null);
            $table->string('api_token', 255)->nullable()->default(null);
            $table->timestamp('api_date')->nullable();
            $table->integer('api_status')->nullable()->default(null);
            $table->integer('api_loads')->nullable()->default(null);
            $table->timestamp('api_lastload')->nullable();
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
        Schema::dropIfExists('workcontrol_api');
    }
};
