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
        Schema::create('ws_siteviews_online', function (Blueprint $table) {
            $table->integer('online_id')->autoIncrement();
            $table->integer('online_user')->nullable()->default(null);
            $table->string('online_name')->nullable()->default(null);
            $table->timestamp('online_startview')->nullable()->default(null);
            $table->timestamp('online_endview')->nullable()->default(null);
            $table->string('online_ip')->nullable()->default(null);
            $table->string('online_url')->nullable()->default(null);
            $table->string('online_agent')->nullable()->default(null);
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
        Schema::dropIfExists('ws_siteviews_online');
    }
};
