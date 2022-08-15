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
        Schema::create('ws_ead_orders', function (Blueprint $table) {
            $table->integer('order_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('wc_ead_order_user');
            $table->integer('course_id')->unsigned()->nullable()->default(null)->index('wc_ead_order_course');
            $table->integer('order_product_id')->nullable()->default(null);
            $table->string('order_transaction')->nullable()->default(null);
            $table->integer('order_callback_type')->nullable()->default(null);
            $table->string('order_off')->nullable()->default(null);
            $table->decimal('order_price');
            $table->string('order_currency')->nullable()->default(null);
            $table->string('order_payment_type')->nullable()->default(null);
            $table->timestamp('order_purchase_date')->nullable()->default(null);
            $table->timestamp('order_warranty_date')->nullable()->default(null);
            $table->timestamp('order_confirmation_purchase_date')->nullable()->default(null);
            $table->string('order_sck')->nullable()->default(null);
            $table->string('order_src')->nullable()->default(null);
            $table->string('order_aff')->nullable()->default(null);
            $table->string('order_aff_name')->nullable()->default(null);
            $table->string('order_cms_aff')->nullable()->default(0.00);
            $table->decimal('order_cms_marketplace')->default(0.00);
            $table->decimal('order_cms_vendor')->default(0.00);
            $table->string('order_status')->nullable()->default(null);
            $table->timestamp('order_chargeback')->nullable()->default(null);
            $table->integer('order_delivered')->nullable()->default(null);
            $table->string('order_signature')->nullable()->default(null);
            $table->string('order_signature_plan')->nullable()->default(null);
            $table->integer('order_signature_recurrency')->nullable()->default(null);
            $table->integer('order_signature_period')->nullable()->default(null);
            $table->string('order_signature_status')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_orders');
    }
};
