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
        Schema::create('ws_products_stock', function (Blueprint $table) {
            $table->integer('stock_id')->unsigned()->autoIncrement();
            $table->integer('pdt_id')->unsigned()->nullable()->default(null)->index('wc_stock_product');
            $table->string('stock_code')->nullable()->default(null);
            $table->decimal('stock_inventory')->nullable()->default(0);
            $table->decimal('stock_sold')->nullable()->default(0);
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
        Schema::dropIfExists('ws_products_stock');
    }
};
