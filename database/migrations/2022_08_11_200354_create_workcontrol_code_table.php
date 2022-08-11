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
        Schema::create('workcontrol_code', function (Blueprint $table) {
            $table->integer('code_id')->autoIncrement();
            $table->string('code_name', 255)->nullable();
            $table->string('code_condition', 255)->nullable();
            $table->text('code_script')->nullable();
            $table->timestamp('code_created')->nullable();
            $table->decimal('code_views')->nullable();
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
        Schema::dropIfExists('workcontrol_code');
    }
};
