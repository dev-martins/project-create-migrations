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
        Schema::create('ws_ead_support', function (Blueprint $table) {
            $table->integer('support_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('wc_ead_support_user');
            $table->integer('enrollment_id')->unsigned()->nullable()->default(null)->index('wc_ead_support_enrollment');
            $table->integer('class_id')->unsigned()->nullable()->default(null)->index('wc_ead_support_class');
            $table->text('support_content')->nullable()->default(null);
            $table->integer('support_status')->nullable()->default(null);
            $table->timestamp('support_open')->nullable()->default(null);
            $table->timestamp('support_reply')->nullable()->default(null);
            $table->timestamp('support_close')->nullable()->default(null);
            $table->integer('support_review')->nullable()->default(null);
            $table->text('support_comment')->nullable()->default(null);
            $table->integer('support_published')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_support');
    }
};
