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
        Schema::create('policy_topics', function (Blueprint $table) {
            $table->integer('topic_id')->unsigned()->autoIncrement();
            $table->string('topic_title')->nullable()->default(null);
            $table->text('text')->nullable()->default(null);
            $table->integer('policie_id')->unsigned()->nullable()->default(null);
            $table->foreign('policie_id')->references('policie_id')->on('policies')->onDelete('cascade')->onUpdate('cascade');
            $table->char('order', 2)->nullable()->default(0)->index('policy_topics_order');
            $table->char('enabled' ,1)->nullable()->default(1);
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
        Schema::dropIfExists('policy_topics');
    }
};
