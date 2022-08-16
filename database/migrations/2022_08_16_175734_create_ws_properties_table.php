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
        Schema::create('ws_properties', function (Blueprint $table) {
            $table->integer('realty_id')->unsigned()->autoIncrement();
            $table->string('realty_cover')->nullable()->default(null);
            $table->string('realty_title')->nullable()->default(null);
            $table->string('realty_name')->nullable()->default(null);
            $table->string('realty_ref')->nullable()->default(null);
            $table->decimal('realty_price')->nullable()->default(null);
            $table->text('realty_desc')->nullable()->default(null);
            $table->integer('realty_finality')->nullable()->default(null);
            $table->integer('realty_type')->nullable()->default(null);
            $table->decimal('realty_builtarea')->nullable()->default(null);
            $table->decimal('realty_totalarea')->nullable()->default(null);
            $table->decimal('realty_bedrooms')->nullable()->default(null);
            $table->decimal('realty_apartaments')->nullable()->default(null);
            $table->decimal('realty_bathrooms')->nullable()->default(null);
            $table->decimal('realty_parkings')->nullable()->default(null);
            $table->text('realty_particulars')->nullable()->default(null);
            $table->integer('realty_transaction')->nullable()->default(null);
            $table->string('realty_state')->nullable()->default(null);
            $table->string('realty_city')->nullable()->default(null);
            $table->string('realty_district')->nullable()->default(null);
            $table->timestamp('realty_date')->nullable()->default(null);
            $table->integer('realty_observation')->nullable()->default(null);
            $table->integer('realty_contact')->nullable()->default(null)->index('wc_propertie_author');
            $table->integer('realty_status')->unsigned()->nullable()->default(0);
            $table->decimal('realty_views')->nullable()->default(0);
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
        Schema::dropIfExists('ws_properties');
    }
};
