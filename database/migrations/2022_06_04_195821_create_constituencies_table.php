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
        Schema::create('constituencies', function (Blueprint $table) {
            $table->id();
            $table->string('hex', 11);
            $table->foreignId('country_id')->contrained();
            $table->foreignId('region_id')->contrained();
            $table->foreignId('county_id')->contrained();
            $table->string('name');
            $table->string('slug');
            $table->string('image');
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
        Schema::dropIfExists('constituencies');
    }
};
