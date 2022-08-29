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
        Schema::create('hotmart_subscriptions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('product_id')->unsigned();
            $table->string('product_name')->nullable()->default(null);
            $table->string('buyer_email')->nullable()->default(null);
            $table->string('buyer_name')->nullable()->default(null);
            $table->float('purchase_price')->nullable()->default(null);
            $table->string('purchase_status')->nullable()->default(null);
            $table->timestamp('purchase_order_date')->nullable()->default(null);
            $table->string('transaction')->nullable()->default(null);
            $table->string('subscription_status')->nullable()->default(null);
            $table->string('subscription_plan_name')->nullable()->default(null);
            $table->string('subscription_code')->nullable()->default(null);
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
        Schema::dropIfExists('hotmart_subscriptions');
    }
};
