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
        Schema::create('ws_siteviews_views', function (Blueprint $table) {
            $table->integer('views_id')->autoIncrement();
            $table->date('views_date')->nullable()->default(null)->index('idx_1');
            $table->decimal('views_users')->nullable()->default(null);
            $table->decimal('views_views')->nullable()->default(null);
            $table->decimal('views_pages')->nullable()->default(null);
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
        Schema::dropIfExists('ws_siteviews_views');
    }
};
