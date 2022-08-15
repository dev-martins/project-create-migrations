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
        Schema::create('ws_ead_professionals', function (Blueprint $table) {
            $table->integer('pro_id')->unsigned()->autoIncrement();
            $table->integer('order')->nullable()->default(null)->index('order');
            $table->string('pro_name')->nullable()->default(null);
            $table->string('pro_lastname')->nullable()->default(null);
            $table->string('pro_photo')->nullable()->default(null);
            $table->string('pro_thumb')->nullable()->default(null);
            $table->char('is_author', 1)->nullable()->default(0);
            $table->string('specialist_thumb')->nullable()->default(null);
            $table->string('pro_prof')->nullable()->default(null);
            $table->string('pro_city')->nullable()->default(null);
            $table->string('pro_state')->nullable()->default(null);
            $table->string('pro_phone')->nullable()->default(null);
            $table->string('pro_email')->nullable()->default(null);
            $table->string('pro_status')->nullable()->default(null);
            $table->text('pro_form')->nullable()->default(null);
            $table->timestamp('pro_created')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_professionals');
    }
};
