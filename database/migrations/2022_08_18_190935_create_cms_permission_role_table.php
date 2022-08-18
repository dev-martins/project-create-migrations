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
        Schema::create('cms_permission_role', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->integer('permission_id');
            $table->foreign('permission_id')->references('permission_id')->on('cms_permissions')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('role_id');
            $table->foreign('role_id')->references('role_id')->on('cms_roles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cms_permission_role');
    }
};
