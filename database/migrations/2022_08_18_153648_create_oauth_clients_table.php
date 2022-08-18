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
        Schema::create('oauth_clients', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->foreignId('user_id')->unsigned()->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name')->nullable()->default(null);
            $table->string('secret')->nullable()->default(null);
            $table->string('provider')->nullable()->default(null);
            $table->text('redirect')->nullable()->default(null);
            $table->char('personal_access_client', 1);
            $table->char('password_client', 1);
            $table->char('revoked', 1);
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
        Schema::dropIfExists('oauth_clients');
    }
};
