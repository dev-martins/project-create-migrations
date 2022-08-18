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
        Schema::create('oauth_access_tokens', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->foreignId('user_id')->unsigned()->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('client_id')->unsigned()->references('id')->on('oauth_clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name')->nullable()->default(null);
            $table->string('scopes')->nullable()->default(null);
            $table->char('revoked', 1)->nullable()->default(1);
            $table->dateTime('expires_at')->nullable()->default(null);
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
        Schema::dropIfExists('oauth_access_tokens');
    }
};
