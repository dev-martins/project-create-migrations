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
        Schema::create('ws_ead_forum', function (Blueprint $table) {
            $table->integer('forum_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('wc_ead_forum_user');
            $table->integer('enrollment_id')->unsigned()->nullable()->default(null)->index('wc_ead_forum_enrollment');
            $table->integer('class_id')->unsigned()->nullable()->default(null)->index('wc_ead_forum_class');
            $table->text('forum_content')->nullable()->default(null);
            $table->integer('forum_status')->nullable()->default(null);
            $table->timestamp('forum_open')->nullable()->default(null);
            $table->timestamp('forum_reply')->nullable()->default(null);
            $table->timestamp('forum_close')->nullable()->default(null);
            $table->integer('forum_review')->nullable()->default(null);
            $table->text('forum_comment')->nullable()->default(null);
            $table->integer('forum_publish')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_forum');
    }
};
