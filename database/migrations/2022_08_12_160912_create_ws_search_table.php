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
        Schema::create('ws_search', function (Blueprint $table) {
            $table->integer('seach_id')->unsigned()->autoIncrement();
            $table->string('search_key')->nullable()->default(null);
            $table->decimal('search_count')->nullable()->default(null);
            $table->timestamp('search_date')->nullable()->default(null);
            $table->timestamp('search_commit')->nullable()->default(null);
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
        Schema::dropIfExists('ws_search');
    }
};
