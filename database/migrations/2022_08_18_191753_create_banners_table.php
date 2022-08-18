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
        Schema::create('banners', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('pro_id')->on('ws_ead_professionals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('type_id')->references('id')->on('banners_type')->onDelete('cascade')->onUpdate('cascade')->default(0);
            $table->foreignId('podcast_id')->unsigned()->references('id')->on('podcasts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('registered_by')->references('id')->on('cms_users')->onDelete('cascade')->onUpdate('cascade');
            $table->char('order', 2)->index('idx_order_banners');
            $table->char('enabled', 1)->index('idx_enabled_banners');
            $table->string('title')->nullable()->default(null);
            $table->string('image_url')->nullable()->default(null);
            $table->string('description');
            $table->date('created');
            $table->softDeletes();
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
        Schema::dropIfExists('banners');
    }
};
