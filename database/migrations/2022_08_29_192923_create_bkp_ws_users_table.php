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
        Schema::create('bkp_ws_users', function (Blueprint $table) {
            $table->integer('user_id')->autoIncrement();
            $table->string('user_thumb')->nullable()->default(null);
            $table->string('user_name')->nullable()->default(null);
            $table->string('user_lastname')->nullable()->default(null);
            $table->string('user_document')->nullable()->default(null);
            $table->integer('user_document_check')->nullable()->default(null);
            $table->char('user_genre', 1)->nullable()->default(null);
            $table->date('user_datebirth')->nullable()->default(null);
            $table->string('user_telephone')->nullable()->default(null);
            $table->string('user_cell')->nullable()->default(null);
            $table->string('user_email')->nullable()->default(null);
            $table->string('user_password')->nullable()->default(null);
            $table->string('user_channel')->nullable()->default(null);
            $table->timestamp('user_registration')->nullable()->default(null);
            $table->timestamp('user_lastupdate')->nullable()->default(null);
            $table->timestamp('user_lastaccess')->nullable()->default(null);
            $table->string('user_login')->nullable()->default(null);
            $table->string('user_login_cookie')->nullable()->default(null);
            $table->integer('user_level')->nullable()->default(1);
            $table->string('user_facebook')->nullable()->default(null);
            $table->string('user_twitter')->nullable()->default(null);
            $table->string('user_youtube')->nullable()->default(null);
            $table->string('user_google')->nullable()->default(null);
            $table->string('user_document_name')->nullable()->default(null);
            $table->string('user_blocking_reason')->nullable()->default(null);
            $table->char('user_agreement', 1)->nullable()->default(0);
            $table->integer('user_videointro')->nullable()->default(0);
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
        Schema::dropIfExists('bkp_ws_users');
    }
};
