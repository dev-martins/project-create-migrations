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
        Schema::create('segments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('image');
            $table->tinyText('title');
            $table->tinyText('description_short');
            $table->text('description_long');
            $table->tinyInteger('enabled')->default(1);
            $table->tinyInteger('default');
            $table->string('host');
            $table->string('guest');
            $table->string('url');
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
        Schema::dropIfExists('segments');
    }
};
