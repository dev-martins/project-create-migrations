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
        Schema::create('segments', function (Blueprint $table) {
            $table->integer('segment_id')->unsigned()->autoIncrement();
            $table->string('segment_title')->nullable()->default(null);
            $table->string('segment_name')->nullable()->default(null);
            $table->string('segment_color', 10)->nullable()->default('#AE9A93');
            $table->timestamp('segment_created')->nullable()->default(null);
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
        Schema::dropIfExists('segments');
    }
};
