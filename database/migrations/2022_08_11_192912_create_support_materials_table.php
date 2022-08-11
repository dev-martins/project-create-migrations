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
        Schema::create('support_materials', function (Blueprint $table) {
            $table->integer('material_id')->autoIncrement();
            $table->string('material_title', 100)->nullable()->default(null);
            $table->string('material_thumb', 150)->nullable()->default(null);
            $table->string('url', 150)->nullable()->default(null);
            $table->text('url_signed')->nullable()->default(null);
            $table->integer('material_type')->nullable()->default(null);
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
        Schema::dropIfExists('support_materials');
    }
};
