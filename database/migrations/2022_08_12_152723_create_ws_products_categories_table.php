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
        Schema::create('ws_products_categories', function (Blueprint $table) {
            $table->integer('cat_id')->unsigned()->autoIncrement();
            $table->integer('cat_parent')->unsigned()->default(null);
            $table->string('cat_title')->nullable()->default(null);
            $table->string('cat_name')->nullable()->default(null);
            $table->string('cat_sizes')->nullable()->default(null);
            $table->timestamp('cat_created')->nullable()->default(null);
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
        Schema::dropIfExists('ws_products_categories');
    }
};
