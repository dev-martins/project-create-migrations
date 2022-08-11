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
        Schema::create('ws_categories', function (Blueprint $table) {
            $table->integer('category_id')->autoIncrement();
            $table->integer('category_parent')->nullable();
            $table->string('category_name', 255)->nullable();
            $table->string('category_title', 255)->nullable();
            $table->text('category_content')->nullable();
            $table->timestamp('category_date')->nullable();
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
        Schema::dropIfExists('ws_categories');
    }
};
