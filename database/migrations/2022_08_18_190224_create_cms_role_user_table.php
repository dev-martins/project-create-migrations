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
        Schema::create('cms_role_user', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->integer('role_id');
            $table->foreign('role_id')->references('role_id')->on('cms_roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->unsigned()->references('id')->on('cms_users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cms_role_user');
    }
};
