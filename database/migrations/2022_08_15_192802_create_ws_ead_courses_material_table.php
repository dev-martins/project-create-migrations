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
        Schema::create('ws_ead_courses_material', function (Blueprint $table) {
            $table->integer('material_id')->unsigned()->autoIncrement();
            $table->integer('course_id')->unsigned()->index('wc_download_course');
            $table->integer('module_id')->unsigned()->index('wc_download_module');
            $table->integer('class_id')->unsigned()->nullable()->default(null)->index('wc_download_class');
            $table->string('material_title')->nullable()->default(null);
            $table->string('material_thumb')->nullable()->default(null);
            $table->string('material_file')->nullable()->default(null);
            $table->string('material_type')->nullable()->default(null);
            $table->integer('material_order')->default(1);
            $table->timestamp('material_sended')->nullable()->default(null);
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
        Schema::dropIfExists('ws_ead_courses_material');
    }
};
