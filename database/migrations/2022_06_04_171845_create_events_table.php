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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('hex', 11);
            $table->foreignId('user_id')->nullable();
            $table->foreignId('event_category_id')->nullable();
            $table->foreignId('event_type_id')->nullable();
            $table->foreignId('host_id')->nullable();
            $table->foreignId('contact_id')->nullable();
            $table->string('caption')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreignId('region_id')->nullable();
            $table->foreignId('county_id')->nullable();
            $table->foreignId('constituancy_id')->nullable();
            $table->string('venue')->nullable();
            $table->string('location')->nullable();
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();
            $table->string('city_town')->nullable();
            $table->string('postcode')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->timestamps();
            $table->boolean('active');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
