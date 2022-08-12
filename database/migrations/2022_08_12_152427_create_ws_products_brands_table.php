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
        Schema::create('ws_products_brands', function (Blueprint $table) {
            $table->integer('brand_id')->unsigned()->autoIncrement();
            $table->string('brand_name')->nullable()->default(null);
            $table->string('brand_title')->nullable()->default(null);
            $table->timestamp('brand_created')->nullable()->default(null);
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
        Schema::dropIfExists('ws_products_brands');
    }
};
