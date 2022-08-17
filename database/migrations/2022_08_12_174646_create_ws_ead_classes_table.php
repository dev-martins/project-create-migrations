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
        Schema::create('ws_ead_classes', function (Blueprint $table) {
            $table->integer('class_id')->unsigned()->autoIncrement();
            $table->string('class_title', 100)->nullable()->default(null);
            $table->string('class_thumb', 150)->nullable()->default(null);
            $table->string('class_name')->nullable()->default(null);
            $table->string('class_video', 100)->nullable()->default(null);
            $table->integer('video_id')->unsigned()->nullable()->default(null)->foreign('video_id')->references('id')->on('aws_videos')->onDelete('cascade');
            $table->integer('class_time')->unsigned()->nullable()->default(622);
            $table->integer('class_order')->unsigned()->nullable()->default(null);
            $table->char('class_active', 1)->nullable()->default(null);
            $table->string('class_material')->nullable()->default(null);
            $table->string('class_desc')->nullable()->default(null);
            $table->integer('class_support')->unsigned()->nullable()->default(null);
            $table->char('pay', 1)->nullable()->default(0);
            $table->integer('class_number')->unsigned()->nullable()->default(1);
            $table->timestamp('class_created')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_classes');
    }
};
