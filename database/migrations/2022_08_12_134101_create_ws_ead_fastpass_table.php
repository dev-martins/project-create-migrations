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
        Schema::create('ws_ead_fastpass', function (Blueprint $table) {
            $table->integer('fastpass_id')->autoIncrement();
            $table->integer('user_id');
            $table->integer('course_id');
            $table->integer('module_id');
            $table->timestamp('fastpass_data');
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
        Schema::dropIfExists('ws_ead_fastpass');
    }
};
