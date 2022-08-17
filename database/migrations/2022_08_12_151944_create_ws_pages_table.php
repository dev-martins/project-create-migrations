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
        Schema::create('ws_pages', function (Blueprint $table) {
            $table->integer('page_id')->unsigned()->autoIncrement();
            $table->string('page_name')->nullable()->default(null);
            $table->string('page_title')->nullable()->default(null);
            $table->string('page_subtitle')->nullable()->default(null);
            $table->text('page_content')->nullable()->default(null);
            $table->timestamp('page_date')->nullable()->default(null);
            $table->timestamp('page_revision')->nullable()->default(null);
            $table->integer('page_order')->nullable()->default(null);
            $table->integer('page_status')->unsigned()->nullable()->default(null);
            $table->string('page_cover')->nullable()->default(null);
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
        Schema::dropIfExists('ws_pages');
    }
};
