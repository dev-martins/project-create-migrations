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
        Schema::create('cms_users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 50)->nullable()->default(null);
            $table->string('email', 50)->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->string('password', 100)->nullable()->default(null);
            $table->char('cpf', 14)->nullable()->default(null);
            $table->char('deleted', 1)->nullable()->default(null);
            $table->string('remember_token', 50)->nullable()->default(null);
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
        Schema::dropIfExists('cms_users');
    }
};
