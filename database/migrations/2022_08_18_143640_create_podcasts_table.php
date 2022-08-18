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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->string('image')->nullable()->default(null);
            $table->tinyText('title')->nullable()->default(null);
            $table->tinyText('description_short')->nullable()->default(null);
            $table->char('enabled', 1)->nullable()->default(1);
            $table->char('default', 1)->nullable()->default(null);
            $table->text('description_long')->nullable()->default(null);
            $table->string('host')->nullable()->default(null);
            $table->string('guest')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->softDeletes()->nullable()->default(null);
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
        Schema::dropIfExists('podcasts');
    }
};
