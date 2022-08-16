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
        Schema::create('ws_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->autoIncrement();
            $table->string('user_name')->nullable()->default(null);
            $table->string('user_lastname')->nullable()->default(null);
            $table->string('user_email');
            $table->string('user_password');
            $table->foreignId('aggregator_id')->unsigned()->nullable()->default(100)->references('id')->on('aggregator_podcasts')->onDelete('cascade')->onUpdate('cascade');
            $table->string('user_thumb')->nullable()->default(null);
            $table->string('user_photo')->nullable()->default(null);
            $table->string('user_document')->nullable()->default(null);
            $table->char('user_genre', 1)->nullable()->default(null);
            $table->date('user_datebirth')->nullable()->default(null);
            $table->string('user_telephone')->nullable()->default(null);
            $table->char('user_phone_ddi', 11)->nullable()->default(+55);
            $table->integer('user_document_check')->nullable()->default(null);
            $table->string('user_cell')->nullable()->default(null);
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
            $table->integer('user_agreement')->nullable()->default(0);
            $table->integer('user_videointro')->nullable()->default(0);
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->string('remember_token')->nullable()->default(null);
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
        Schema::dropIfExists('ws_users');
    }
};
