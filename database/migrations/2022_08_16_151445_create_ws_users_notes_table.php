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
        Schema::create('ws_users_notes', function (Blueprint $table) {
            $table->integer('note_id')->unsigned()->autoIncrement();
            $table->integer('user_id')->unsigned()->nullable()->default(null)->index('note_user_id');
            $table->integer('admin_id')->nullable()->default(null)->index('note_admin_id');
            $table->string('note_text')->nullable()->default(null);
            $table->char('note_status', 2)->nullable()->default(null);
            $table->timestamp('note_datetime')->nullable()->default(null);
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
        Schema::dropIfExists('ws_users_notes');
    }
};
