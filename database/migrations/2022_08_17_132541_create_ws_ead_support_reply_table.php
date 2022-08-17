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
        Schema::create('ws_ead_support_reply', function (Blueprint $table) {
            $table->integer('response_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('wc_ead_support_reply_user');
            $table->integer('enrollment_id')->unsigned()->nullable()->default(null)->index('ws_ead_support_reply_enrollment');
            $table->integer('support_id')->unsigned()->nullable()->default(null)->index('ws_ead_support_reply_support');
            $table->text('response_content')->nullable()->default(null);
            $table->timestamp('response_open')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_support_reply');
    }
};
