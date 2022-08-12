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
        Schema::create('ws_products_coupons', function (Blueprint $table) {
            $table->integer('cp_id')->unsigned()->autoIncrement();
            $table->string('cp_title')->nullable()->default(null);
            $table->string('cp_coupon')->nullable()->default(null);
            $table->decimal('cp_discount')->nullable()->default(null);
            $table->timestamp('cp_start')->nullable()->default(null);
            $table->timestamp('cp_end')->nullable()->default(null);
            $table->decimal('cp_hits')->nullable()->default(null);
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
        Schema::dropIfExists('ws_products_coupons');
    }
};
