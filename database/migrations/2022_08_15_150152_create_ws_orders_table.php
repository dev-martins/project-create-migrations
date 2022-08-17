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
        Schema::create('ws_orders', function (Blueprint $table) {
            $table->integer('order_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('wc_order_user');
            $table->integer('order_status')->unsigned()->nullable()->default(0);
            $table->integer('order_payment')->unsigned()->nullable()->default(1);
            $table->decimal('order_price')->nullable()->default(0.00);
            $table->decimal('order_installment')->nullable()->default(null);
            $table->decimal('order_coupon')->nullable()->default(null);
            $table->decimal('order_free')->nullable()->default(null);
            $table->string('order_billet')->nullable()->default(null);
            $table->string('order_code')->nullable()->default(null);
            $table->integer('order_addr')->unsigned()->nullable()->default(null);
            $table->integer('order_shipcode')->unsigned()->nullable()->default(null);
            $table->decimal('order_shipprice')->nullable()->default(null);
            $table->date('order_shipment')->nullable()->default(null);
            $table->string('order_tracking')->nullable()->default(null);
            $table->string('order_nfepdf')->nullable()->default(null);
            $table->string('order_nfexml')->nullable()->default(null);
            $table->timestamp('order_date')->nullable()->default(null);
            $table->timestamp('order_update')->nullable()->default(null);
            $table->integer('order_mail_processing')->unsigned()->nullable()->default(null);
            $table->integer('order_mail_completed')->unsigned()->nullable()->default(null);
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
        Schema::dropIfExists('ws_orders');
    }
};
