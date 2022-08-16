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
        Schema::create('ws_users_address', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index('wc_users_address');
            $table->integer('addr_id')->autoIncrement();
            $table->integer('addr_key')->nullable()->default(null);
            $table->string('addr_name')->nullable()->default(null);
            $table->string('addr_zipcode')->nullable()->default(null);
            $table->string('addr_street')->nullable()->default(null);
            $table->string('addr_number')->nullable()->default(null);
            $table->string('addr_complement')->nullable()->default(null);
            $table->string('addr_district')->nullable()->default(null);
            $table->string('addr_city')->nullable()->default(null);
            $table->char('addr_state', 2)->nullable()->default(null);
            $table->string('addr_country')->nullable()->default(null);
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
        Schema::dropIfExists('ws_users_address');
    }
};
