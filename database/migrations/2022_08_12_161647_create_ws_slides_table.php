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
        Schema::create('ws_slides', function (Blueprint $table) {
            $table->integer('slide_id')->unsigned()->autoIncrement();
            $table->integer('slide_status')->nullable()->default(null);
            $table->string('slide_image')->nullable()->default(null);
            $table->string('slide_title')->nullable()->default(null);
            $table->text('slide_desc')->nullable()->default(null);
            $table->string('slide_link')->nullable()->default(null);
            $table->timestamp('slide_date')->nullable()->default(null);
            $table->timestamp('slide_start')->nullable()->default(null);
            $table->timestamp('slide_end')->nullable()->default(null);
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
        Schema::dropIfExists('ws_slides');
    }
};
