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
        Schema::create('ws_posts', function (Blueprint $table) {
            $table->integer('post_id')->unsigned()->autoIncrement();
            $table->string('post_name');
            $table->string('post_title')->nullable()->default(null);
            $table->text('post_subtitle')->nullable()->default(null);
            $table->longText('post_content')->nullable()->default(null);
            $table->string('post_cover')->nullable()->default(null);
            $table->string('post_video')->nullable()->default(null);
            $table->timestamp('post_date')->nullable()->default(null);
            $table->integer('post_author')->unsigned()->nullable()->default(null)->index('wc_posts_author');
            $table->integer('post_category')->nullable()->default(null)->index('wc_posts');
            $table->string('post_category_parent')->nullable()->default(null);
            $table->decimal('post_views')->nullable()->default(0);
            $table->timestamp('post_lastview')->nullable()->default(null);
            $table->integer('post_status')->default(0);
            $table->string('post_type')->nullable()->default(null);
            $table->integer('post_instant_article')->nullable()->default(null);
            $table->integer('post_amp')->nullable()->default(null);
            $table->string('post_tags')->nullable()->default(null);
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
        Schema::dropIfExists('ws_posts');
    }
};
