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
        Schema::create('ws_countries', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 100)->nullable()->default(null);
            $table->string('dialCode', 10)->nullable()->default(null);
            $table->string('isoCode', 10)->nullable()->default(null);
            $table->string('flag')->nullable()->default(null);
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
        Schema::dropIfExists('ws_countries');
    }
};
