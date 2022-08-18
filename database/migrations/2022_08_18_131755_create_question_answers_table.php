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
        Schema::create('question_answers', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable()->default(null);
            $table->text('answer')->nullable()->default(null);
            $table->foreignId('topic_id')->references('id')->on('common_questions')->onDelete('cascade')->onUpdate('cascade');
            $table->char('order', 2)->nullable()->default(1);
            $table->char('enabled', 1)->nullable()->default(1);
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
        Schema::dropIfExists('question_answers');
    }
};
