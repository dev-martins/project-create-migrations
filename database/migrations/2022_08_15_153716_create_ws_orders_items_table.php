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
        Schema::create('ws_orders_items', function (Blueprint $table) {
            $table->integer('item_id')->unsigned()->autoIncrement();
            $table->integer('order_id')->unsigned()->nullable()->default(null);
            $table->integer('pdt_id')->unsigned()->nullable()->default(null);
            $table->integer('stock_id')->unsigned()->nullable()->default(null);
            $table->string('item_name')->nullable()->default(null);
            $table->decimal('item_price')->nullable()->default(null);
            $table->decimal('item_amount')->nullable()->default(1);
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
        Schema::dropIfExists('ws_orders_items');
    }
};
