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
        Schema::create('ws_products', function (Blueprint $table) {
            $table->integer('pdt_id')->unsigned()->autoIncrement();
            $table->string('pdt_code')->nullable()->default(null);
            $table->integer('pdt_parent')->unsigned()->nullable()->default(null)->index('wc_product_parent');
            $table->string('pdt_title')->nullable()->default(null);
            $table->string('pdt_subtitle')->nullable()->default(null);
            $table->string('pdt_name')->nullable()->default(null);
            $table->string('pdt_hotlink')->nullable()->default(null);
            $table->string('pdt_cover')->nullable()->default(null);
            $table->text('pdt_content')->nullable()->default(null);
            $table->decimal('pdt_price')->nullable()->default(null);
            $table->decimal('pdt_inventory')->default(0);
            $table->decimal('pdt_delivered')->default(0);
            $table->integer('pdt_brand')->unsigned()->nullable()->default(null)->index('wc_products_brands');
            $table->integer('pdt_category')->unsigned()->nullable()->default(null)->index('wc_products_categories');
            $table->integer('pdt_subcategory')->unsigned()->nullable()->default(null)->index('wc_products_subcategories');
            $table->decimal('pdt_offer_price')->nullable()->default(null);
            $table->timestamp('pdt_offer_start')->nullable()->default(null);
            $table->timestamp('pdt_offer_end')->nullable()->default(null);
            $table->decimal('pdt_dimension_heigth')->default(0);
            $table->decimal('pdt_dimension_width')->default(0);
            $table->decimal('pdt_dimension_depth')->default(0);
            $table->decimal('pdt_dimension_weight')->default(0);
            $table->timestamp('pdt_created')->nullable()->default(null);
            $table->decimal('pdt_views')->nullable()->default(0);
            $table->timestamp('pdt_lastviews')->nullable()->default(null);
            $table->integer('pdt_status')->nullable()->default(0);
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
        Schema::dropIfExists('ws_products');
    }
};
