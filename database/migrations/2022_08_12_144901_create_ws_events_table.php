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
        Schema::create('ws_events', function (Blueprint $table) {
            $table->integer('event_id')->autoIncrement();
            $table->integer('event_by')->unsigned();
            $table->string('event_title')->nullable()->default(null);
            $table->string('event_name')->nullable()->default(null);
            $table->string('event_cover')->nullable()->default(null);
            $table->string('event_image_1')->nullable()->default(null);
            $table->string('event_image_2')->nullable()->default(null);
            $table->string('event_image_3')->nullable()->default(null);
            $table->string('event_image_4')->nullable()->default(null);
            $table->string('event_image_5')->nullable()->default(null);
            $table->text('event_headline')->nullable()->default(null);
            $table->text('event_description_col1')->nullable()->default(null);
            $table->text('event_description_col2')->nullable()->default(null);
            $table->text('event_comments')->nullable()->default(null);
            $table->text('event_comments_more')->nullable()->default(null);
            $table->string('event_city')->nullable()->default(null);
            $table->string('event_state')->nullable()->default(null);
            $table->string('event_country')->nullable()->default(null);
            $table->string('event_location')->nullable()->default(null);
            $table->decimal('event_price')->nullable()->default(null);
            $table->string('event_installments')->nullable()->default(null);
            $table->string('event_conditions')->nullable()->default(null);
            $table->integer('event_tickets')->nullable()->default(null);
            $table->integer('event_available')->nullable()->default(null);
            $table->timestamp('event_date')->nullable()->default(null);
            $table->timestamp('event_date_end')->nullable()->default(null);
            $table->integer('event_status')->nullable()->default(null);
            $table->timestamp('event_created')->nullable()->default(null);
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
        Schema::dropIfExists('ws_events');
    }
};
